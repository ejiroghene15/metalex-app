@extends('layout.master')

@section('title', "Forum | $forum->name")

@section('body')
  <!-- Navbar -->
  @include('partials.navbar')

  <main>
    <header class="pt-8 bg-light-gradient-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mb-8">
              <span
                class="badge p-2 bg-info-soft mb-3 d-inline-block fw-bold ls-md">
                {{$forum->category->name}}
              </span>
              <h3 class="mb-2 display-6">{{$forum->name}}</h3>
              <h5 class="mb-0 text-muted lh-3">{{$forum->description}} </h5>
            </div>
          </div>
        </div>
        <a href="#" class="btn btn-secondary btn-sm mb-3" data-bs-toggle="modal"
           data-bs-target="#new-discussion">Start Discussion...</a>
        <a href="#" class="btn btn-info btn-sm mb-3 ms-2" data-bs-toggle="modal"
           data-bs-target="#forum-rules">Rules & Guidelines</a>
      </div>
    </header>

    <section class="container">
      {{-- alert display section --}}
      @if (session('message'))
        <div class="mt-3">
          <x-alert :status="session('status')" :message="session('message')"/>
        </div>
      @endif

      <ul class="list-group list-group-flush mt-5">
        @forelse($forum->topics as $_)
          <li class="p-3 card mb-3">
            <div class="d-xl-flex">
              <figure class="mb-3 mb-md-0 d-none d-md-inline">
                <!-- Img -->
                <img src="{{$_->user->avatar}}" alt="Gravatar" class="icon-shape border rounded-circle"
                     width="35" height="35">
              </figure>
              <!-- text -->
              <article class="ms-xl-3 w-100 mt-3 mt-xl-1">
                <nav class="mb-2">
                  <h5 class="mb-2 fs-4 d-flex">
                    <a href="{{ route('forum.thread', ["slug"=> $_->slug, "topic_id" => $_->id]) }}"
                       class="text-gray-600 d-block me-3">
                      {{$_->subject}}
                    </a>

                    {{--                    <span class="ms-auto bi bi-bookmark text-muted bookmark"></span>--}}
                    <span class="badge p-2 bg-danger-soft ms-auto align-self-start"><i class="bi bi-chat-square"></i>
                  {{$_->threads->count()}}
                </span>
                  </h5>

                  <div class="d-flex gap-3">
                    <h6 class="text-primary">
                      <i class="bi bi-person"></i>
                      {{$_->user->fullName()}}
                    </h6>

                    <h6 class="text-success">
                      <i class="bi bi-calendar-date"></i> {{$_->created_at}}
                    </h6>
                  </div>
                </nav>

                @if($_->threads->count())
                  <span class="text-muted">
                              <i class="mdi mdi-reply"></i>
                              <h6 class="text-muted d-inline-block">
                                <span>{{$_->threads->last()->user->fullName()}}</span>
                                <span class="mx-1 d-inline-block"></span>
                                <i class="fe fe-clock text-muted"></i>
                              <span>{{$_->threads->last()->created_at->diffForHumans() }}</span>
                              </h6>
                  </span>
                @endif

              </article>
            </div>

          </li>
        @empty
          <h5 class="mb-0 text-muted">No topic has been created in this forum.</h5>
        @endforelse
      </ul>

      {{$topics->onEachSide(10)->links()}}
    </section>
    @include('forum.partials.start_discussion')
    @include('forum.partials.rules')
  </main>

  <!-- footer -->
  @include('partials.footer')
@endsection

@section('scripts')
  @parent
  @auth
    <script src="{{asset('assets/js/vendors/ckeditor.js')}}"></script>
    <script src="{{asset('assets/js/custom/content.js')}}"></script>
    <script>CKClassicEditor()</script>
  @endauth
@endsection