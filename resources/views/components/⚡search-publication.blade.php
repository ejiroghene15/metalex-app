<?php

use App\Models\Blog;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

new class extends Component {
  use WithPagination, WithoutUrlPagination;

  public $search;
  public $dateRange;

  public function clearFilters()
  {
    $this->reset(['selectedCategories', 'search']);
    $this->resetPage();
  }

  #[Computed]
  public function posts()
  {
    $query = Blog::withoutTrashed();

    if ($this->search) {
      $query->where('title', 'like', '%' . $this->search . '%');
    }

    $query->latest();

    return $query->paginate(6);
  }

  #[Computed]
  public function searchResults()
  {
    if (!$this->search) {
      return [];
    }

    return Blog::withoutTrashed()
      ->where('title', 'like', '%' . $this->search . '%')
      ->latest()
      ->take(10)
      ->get();
  }
};
?>

<div>
  {{--  <header class="mb-5">--}}
  {{--    <h2 class="text-gray-600">Articles</h2>--}}
  {{--  </header>--}}

  <div class="position-relative mb-5 mx-auto" style="width: 100%; max-width: 400px"
       x-data="{ open: true }"
       @click.outside="open = false">
      <span class="position-absolute search-icon" style="top: 50%; left: 10px; transform: translateY(-50%)">
        <i class="bi bi-search"></i>
      </span>
    <input type="search" placeholder="Search for articles..." wire:model.live="search"
           @focus="open = true"
           class="form-control ps-5">

    @if($this->search && count($this->searchResults) > 0)
      <div class="position-absolute w-100 bg-white shadow-sm rounded-bottom mt-1 overflow-auto border"
           x-show="open"
           style="max-height: 300px; z-index: 1050; top: 100%">
        @foreach($this->searchResults as $_)
          <a href="{{route('full-article', ["article"=> $_->slug, "id" => $_->id])}}"
             class="d-block p-3 border-bottom text-decoration-none">
            <div class="d-flex flex-column">
              <span class="fw-bold text-dark text-capitalize mb-1" style="font-size: 14px">{{strtolower($_->title)}}</span>
              <div class="d-flex align-items-center">
                <img src="{{$_->author->avatar}}" alt="" class="rounded-circle avatar-xs me-2">
                <small class="text-muted text-capitalize">{{strtolower($_->author->fullName())}}</small>
              </div>
            </div>
          </a>
        @endforeach
      </div>
    @endif
  </div>

  <section class="row" style="row-gap: 50px" wire:ignore>
    @foreach($this->posts as $_)
      <article class="col-xl-4 col-lg-4 col-md-6 col-12">
        <!-- Card -->
        <div class="card mb-4 shadow-lg h-100">
          <a href="{{route('full-article', ["article"=> $_->slug, "id" => $_->id])}}"
             class="card-img-top stretched-link pt-2 px-2">
            <img src="{{$_->thumbnail}}" class="card-img-top rounded-top-md" style="height: 250px; object-fit: cover"
                 alt="">
          </a>
          <!-- Card body -->
          <div class="card-body d-flex flex-column">
            <a href="#" style="width: max-content"
               class="fs-6 fw-semi-bold d-inline-block mb-3 badge bg-{{$color_tag}}-soft">{{$_->b_category->name}}</a>
            <h5 class="text-capitalize">
              <a href="{{route('full-article', ["article"=> $_->slug, "id" => $_->id])}}" class="text-inherit">
                {{strtolower($_->title)}}
              </a>
            </h5>
            <p class="lh-3">{!! nl2br($_->excerpt()) !!}</p>
            <!-- Media content -->
            <div class="row align-items-center g-0 mt-4 mt-auto">
              <div class="col-auto">
                <img src="{{$_->author->avatar}}" alt=""
                     class="rounded-circle avatar-sm me-2">
              </div>
              <div class="col lh-1">
                <h5 class="mb-1 text-gray-600">{{$_->author->fullName()}}</h5>
                <p class="fs-6 mb-0 text-{{$color_tag}}">{{$_->created_at}}</p>
              </div>
              <div class="col-auto">
                <p class="fs-6 mb-0">{{$_->readTime()}}</p>
              </div>
            </div>
          </div>
        </div>
      </article>
    @endforeach
  </section>

  <footer class="mt-5 d-flex justify-content-center">
    {{$this->posts->onEachSide(1)->links()}}
  </footer>
</div>