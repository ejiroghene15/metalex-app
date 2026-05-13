<?php

use App\Models\Blog;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component {
  use WithPagination;

  public $search;
  public $selectedCategories = [];
  public $dateRange;
  public $sortBy = 'recent';

  public function clearFilters()
  {
    $this->reset(['selectedCategories', 'dateRange', 'sortBy', 'search']);
    $this->resetPage();
  }

  #[Computed]
  public function posts()
  {
    $query = Blog::withoutTrashed();

    if ($this->search) {
      $query->where('title', 'like', '%' . $this->search . '%');
    }

    if (!empty($this->selectedCategories)) {
      $query->whereIn('category', $this->selectedCategories);
    }

    if ($this->dateRange) {
      $query->whereDate('created_at', $this->dateRange);
    }

    $sortBy = $this->sortBy;
    $query->when($sortBy === 'month', fn($q) => $q->where('created_at', '>=', now()->subMonth()))
      ->when($sortBy === '3months', fn($q) => $q->where('created_at', '>=', now()->subMonths(3)))
      ->when($sortBy === 'year', fn($q) => $q->where('created_at', '>=', now()->subYear()));

    $query->latest();

    return $query->paginate(6);
  }
};
?>

@section('title', 'News & Updates')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{asset('assets/libs/flatpickr/dist/flatpickr.min.css')}}">
@endpush

<div>
  @include('main.partials.navbar')

  {{--  Jumbotron --}}
  <section class="pt-3" id="news-jumbotron">
    <div class="col-lg-9 mx-auto px-3 text-center">
      <h2 class="text-white" id="heading">News & Updates</h2>
      <p class="text-white pt-3 px-xl-15">
        Stay informed with the latest insights, legal trends, and updates from our expert team. Explore articles,
        analyses, and news that keep you ahead in the ever-evolving legal landscape.
      </p>
    </div>
  </section>

  <section id="news-n-updates" class="py-5">
    <nav class="nav mx-auto my-3 position-relative" style="width: max-content" id="nav-slider">
      <button class="btn active" data-bs-toggle="tab" data-bs-target="#news-articles">Articles</button>
      <button class="btn" data-bs-toggle="tab" data-bs-target="#news-categories">Categories</button>
      <p class="slider"></p>
    </nav>
    <div class="col-lg-12 px-5">
      <div class="tab-content">
        <div class="tab-pane fade show active" id="news-articles" role="tabpanel" aria-labelledby="news-articles">
          {{--This displays the news and updates--}}
          @include('main.components.news-updates')
        </div>

        <div class="tab-pane fade" id="news-categories" role="tabpanel" aria-labelledby="news-categories">
          <div class="row">
            @foreach($categories as $_)
              <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <!-- Card -->
                <div class="card mb-4 card-hover">
                  <div class="d-flex justify-content-between align-items-center p-4">
                    <div class="d-flex">
                      <a href="{{route('single-category', ["category"=> $_->slug, "id" => $_->id])}}"
                         class="stretched-link">
                        <!-- Img -->
                        <img src="{{asset('assets/images/png/writing.png')}}" alt="" class="avatar-sm"></a>
                      <div class="ms-3">
                        <h4 class="mb-1">{{$_->name}}</h4>
                        <p class="mb-0 fs-6">
                  <span class="me-2 badge bg-primary-soft fw-semi-bold"><span class="text-dark fw-medium">
                      {{$_->blog_post->count()}}
                    </span>
                    Posts
                  </span>
                          <span class="badge bg-info-soft fw-semi-bold">
                      <span class="text-dark fw-medium">{{$_->blog_post->pluck('user_id')->unique()->count()}} </span>
                    Authors
                    </span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>

  {{--  Additional Info--}}
  <section id="before-footer" class="mt-5">
    @include('main.contact-info-footer')
  </section>

  @include('main.partials.footer')
</div>

@push('scripts')
  <script src="{{asset('assets/libs/flatpickr/dist/flatpickr.min.js')}}"></script>
  <script>
    $('.date-filter').flatpickr(
      {
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
      }
    )
    document.querySelectorAll('#nav-slider .btn').forEach(function (elem) {
      elem.addEventListener('click', function (e) {
        let slidePosition = e.currentTarget.offsetLeft > 6 ? (e.currentTarget.offsetLeft - 16) : 0;
        document.querySelector('.slider').style.transform = `translateX(${slidePosition}px)`;
        document.querySelectorAll('#nav-slider .btn').forEach(function (btn) {
          btn.classList.remove('active')
        })
        e.currentTarget.classList.add('active')

      })
    })
  </script>
@endpush