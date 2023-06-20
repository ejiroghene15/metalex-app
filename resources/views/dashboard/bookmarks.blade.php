@extends('layout.master')

@section('title', 'Edit Profile')

@section('body')
  <!-- Navbar -->
  @include('partials.navbar')

  <main>
    <section class="pt-5 pb-5">
      <div class="container">
        <!-- User info -->
        @include('dashboard.partials.user_info')

        {{-- alert display section --}}
        @if (session('message'))
          <x-alert :status="session('status')" :message="session('message')" :/>
        @endif

        <!-- Content -->
        <div class="row mt-0 mt-md-4">

          @include('dashboard.partials.sidebar')

          <div class="col-lg-9 col-md-8 col-12">
            <!-- Card -->
            <div class="card mb-4">
              <!-- Card header -->
              <div class="card-header d-lg-flex align-items-center justify-content-between">
                <div class="mb-3 mb-lg-0">
                  <h3 class="mb-0">Bookmarked Items</h3>
                </div>
              </div>
              <!-- Card body -->
              <div class="card-body px-0 pb-2 pt-0">
                <ul class="list-group list-group-flush">
                  @forelse($user->bookmarks as $_)
                    <!-- List group item -->
                    @php($bm = $_->{$_->type})
                    <li class="list-group-item">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-start">
                          <img src="{{ asset('assets/images/avatar/conversation.png') }}" class="me-2" height="28"
                               width="28" alt="">
                          <a href="{{ route('forum.thread', ['slug' => $bm->slug, 'topic_id' => $bm->id]) }}"
                             class="text-muted">
                            <h5 class="mb-0">{{ $bm->subject }}</h5>
                            <p class="my-2 badge bg-info-soft">{{$bm->forum->name}}</p>
                            <span class="mb-0 badge bg-danger-soft">
                          <i class="bi bi-chat-square-dots me-1"></i>{{ $bm->threads->count() }}
                        </span>
                            <span class="mb-0 badge bg-success-soft" data-bs-toggle="tooltip" data-placement="right"
                                  title="Date Created">
                          <i class="bi bi-calendar me-1"></i>{{ $bm->created_at->isoFormat('Do, MMM YYYY') }}
                        </span>
                          </a>
                        </div>
                        <div>
                          <form class="d-inline remove_bookmark" method="post">
                            @csrf
                            <a class="btn-icon btn btn-outline-danger btn-sm rounded-circle" href="#" role="button"
                               title="Remove Bookmark"
                               data-bs-toggle="tooltip" data-placement="right" aria-expanded="false">
                              <i class="fe fe-trash-2"></i>
                            </a>
                            <input type="hidden" name="topic" value="{{base64_encode($bm->id)}}">
                          </form>
                        </div>
                      </div>
                    </li>
                  @empty
                    <h5 class="card-body pb-0">You have no bookmarked item</h5>
                  @endforelse
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- footer -->
  @include('dashboard.partials.footer')
@endsection

@section('scripts')
  @parent
  <script>
    $(".remove_bookmark").on("click", function () {
      let data = $(this).serializeArray();
      let parent = $(this).parents('.list-group-item');
      $.post(`{{env('APP_URL')}}/forum/removeBookmark/thread`, data, function (response) {
        if (response?.status === 'success') parent.remove()
      })
    })
  </script>
@endsection
