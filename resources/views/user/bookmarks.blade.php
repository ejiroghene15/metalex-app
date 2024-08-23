@extends('user.layout.master')

@section('title', '- Bookmarks')

@section('body')
  <section class="container-fluid p-4">

    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
        <!-- Page header -->
        <div class="border-bottom pb-4 mb-4 d-md-flex align-items-center justify-content-between">
          <div class="mb-3 mb-md-0">
            <h1 class="mb-1 h2 fw-bold">Bookmarks</h1>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                @include('user.component.breadcrumb')
                <li class="breadcrumb-item active" aria-current="page">
                  Bookmarks
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="card mb-4">
        <!-- Card body -->
        <div class="card-body px-0 pb-2" id="bookmark">
          <ul class="list-group list-group-flush">
            @forelse($user->bookmarks as $_)
              <!-- List group item -->
              @php($bm = $_->{$_->type})
              <li class="list-group-item">
                <div class="d-flex justify-content-between">
                  <div>
                    @if($_->type === 'forum')
                      <a target="_blank"
                         href="{{ route('forum.thread', ['slug' => $bm->slug, 'topic_id' => $bm->id]) }}"
                         class="text-muted">
                        <span class="badge bg-dark-secondary-soft">
                        <i class="bi bi-chat-square-dots me-1"></i>
                          Forum
                        </span>
                        <h5 class="mb-0">{{ $bm->subject }}</h5>
                        <p class="my-2 badge bg-info-soft">{{$bm->forum->name}}</p>
                        <span class="mb-0 badge bg-danger-soft">
                          <i class="bi bi-chat-square-dots me-1"></i>{{ $bm->threads->count() }}
                        </span>
                        <span class="mb-0 badge bg-success-soft" data-bs-toggle="tooltip" data-placement="right"
                              title="Date Created">
                          <i class="bi bi-calendar me-1"></i>{{ $bm->created_at }}
                        </span>
                      </a>
                    @elseif($_->type === 'blog')
                      <a target="_blank"
                         href="{{ route('full-article', ['article' => $bm->slug, 'id' => $bm->id]) }}"
                         class="text-muted">
                        <span class="badge bg-dark-secondary-soft">
                        <i class="bi bi-book me-1"></i>
                          Blog
                        </span>
                        <h5 class="mb-0">{{ $bm->title }}</h5>
                        <p class="my-2 badge bg-info-soft">{{$bm->b_category->name}}</p>
                        <span class="mb-0 badge bg-success-soft" data-bs-toggle="tooltip" data-placement="right"
                              title="Date Created">
                          <i class="bi bi-calendar me-1"></i>{{ $bm->created_at }}
                        </span>
                      </a>
                    @endif
                  </div>
                  <div>
                    <form class="d-inline remove_bookmark" method="post">
                      @csrf
                      <a class="btn-icon btn btn-outline-danger btn-sm rounded-circle" href="#">
                        <i class="fe fe-trash-2"></i>
                      </a>
                      <input type="hidden" name="topic" value="{{base64_encode($bm->id)}}">
                    </form>
                  </div>
                </div>
              </li>
            @empty
              <h5>You have no bookmarks.</h5>
            @endforelse
          </ul>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('scripts')
  @parent
  <script>
    $(".remove_bookmark").on("click", function () {
      let data = $(this).serializeArray();
      let parent = $(this).parents('.list-group-item');
      $.post(`{{config('app.url')}}/forum/removeBookmark/thread`, data, function (response) {
        if (response?.status === 'success') $("#bookmark").load(`{{route('user.bookmarks')}} #bookmark > *`);
      })
    })
  </script>
@endsection
