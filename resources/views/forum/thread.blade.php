@extends('layout.master')

@section('title', "$topic->subject")

@section('body')
  <!-- Navbar -->
  @include('partials.navbar')

  <main>
    <!-- Page header -->
    <section class="pt-lg-8 pb-lg-16 pt-8 pb-12 bg-dark">
      <div class="container-md">
        <div class="row align-items-center">
          <div class="col-xl-7 col-lg-7 col-md-12">
            <div>
              <a
                href="{{ route('forum.topics', ["slug"=> $topic->forum->slug, "id" => $topic->forum->id]) }}"
                class="badge p-2 bg-light-soft mb-3 d-inline-block fw-bold ls-md text-inverse">
                {{$topic->forum->name}}
              </a>
              <p class="text-white mb-4 lead">
                {{$topic->subject}}
              </p>
              <div class="d-flex align-items-center">
                @auth
                  <form class="d-inline bookmark" method="post">
                    @csrf
                    <button class="btn btn-sm bg-light-soft text-white">
                      @if($user->bookmarks->where('content_id', $topic->id)->count())
                        <i class="bi bi-bookmark-fill icon me-1"></i>
                        <span class="label" for="remove">Remove Bookmark</span>
                      @else
                        <i class="bi bi-bookmark icon me-1"></i>
                        <span class="label" for="add">Bookmark</span>
                      @endif
                    </button>
                    <input type="hidden" name="topic" value="{{base64_encode($topic->id)}}">
                  </form>

                @endauth
                <span class="badge bg-dark-info-soft mx-2">
                  <i class="fe fe-calendar"></i>
                  <span>{{$topic->created_at->isoFormat("MMM Do, YYYY")}}</span>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Page content -->
    <section class="pb-10">
      <div class="container-lg">
        <div class="row">
          <div class="col-lg-8 col-md-12 col-12 mt-n8 mb-4 mb-lg-0">
            <!-- Card -->
            <section id="thread_section">
              <div class="card rounded-3">

                <header class="position-sticky top-0 bg-white z-5 border-bottom mb-4"
                        style="border-radius: 15px 15px 0 0">
                  <!-- Card header -->
                  <div class="card-header d-flex justify-content-between">
                    <h3 class="mb-0">Threads</h3>
                    <span class="badge p-2 bg-danger-soft align-self-start">
                      <i class="bi bi-chat-square"></i>
                      {{$topic->threads()->count()}}
                    </span>
                  </div>

                  <!-- Card Body -->
                  <article class="card-body pt-3 pb-0">
                    {!! $topic->body !!}
                    {{-- Reply Thread box--}}
                    @auth
                      @include('forum.partials.reply_thread')
                    @else
                      <a class="btn btn-sm bg-primary-soft d-inline-block" href="{{route('login')}}">
                        Login to comment on this thread
                      </a>
                    @endauth
                  </article>
                </header>

                <div class="card-body pt-0 @auth pb-6 @else pb-0 @endauth">
                  @forelse($topic->threads as $_)
                    <article
                      class="comment_section @if(!$loop->last) pb-1 @auth border-bottom mb-7 @else @if(!$_->replies->count()) border-bottom @endif mb-4 @endauth @endif">
                      <div class="d-flex position-relative">
                        <img src="{{$_->user->avatar}}" alt=""
                             class="rounded-circle avatar-md position-relative" style="left: -4px">

                        <div class="ms-3 flex-grow-1">
                          <header class="d-flex gap-2">
                            <div>
                              <h5 class="mb-1">
                                {{$_->user->first_name . ' '. $_->user->last_name}}
                              </h5>

                              <span class="fs-6 badge bg-primary-soft text-muted">
                              {{$_->created_at->diffForHumans()}}
                            </span>
                            </div>

                            {{-- Report abuse tag--}}
                            <a href="#" class="badge bg-gray-300 align-self-start text-muted ms-auto"
                               data-bs-toggle="tooltip"
                               data-placement="top" title="Report Abuse">
                              <i class="fe fe-flag fs-5"></i>
                            </a>
                          </header>
                          <article class="pt-2 @if($_->replies->count()) border-start ms-n6 mt-n2 @endif">
                            <article>
                              <div class="mt-2 fs-5 @if($_->replies->count()) ms-6 mb-n3 @endif">
                                {!! $_->reply !!}
                              </div>
                              @foreach($_->replies as $__)
                                <div
                                  class="d-flex py-3 @if(!$loop->last) border-bottom @else @guest border-bottom @endguest @endif">
                                  <img src="{{$__->user->avatar}}" alt=""
                                       class="rounded-circle avatar-sm ms-n3 align-self-center mt-n3">
                                  <div class="ms-4 flex-grow-1">
                                    <h6 class="mb-1 text-gray-500">
                                      {{$__->user->first_name . ' '. $__->user->last_name}}
                                    </h6>
                                    <span
                                      class="fs-6 badge bg-info-soft text-muted">{{$__->created_at->diffForHumans()}}</span>
                                    <article class="fs-5 pt-2">
                                      {!! $__->reply !!}
                                    </article>
                                  </div>

                                  {{-- Report abuse flag under thread replies--}}
                                  <a href="#"
                                     class="badge bg-gray-300 text-muted align-self-start position-absolute end-0"
                                     data-bs-toggle="tooltip"
                                     data-placement="top" title="Report Abuse">
                                    <i class="fe fe-flag fs-5"></i>
                                  </a>
                                </div>
                              @endforeach
                            </article>
                          </article>
                        </div>

                      </div>

                      @auth
                        <form method="POST" class="reply_comment w-100 position-relative"
                              style="display: none !important;">
                          @csrf
                          <textarea name="reply" rows="1" class="form-control rounded-5 bg-gray-100 border-0 mb-3"
                                    placeholder="Replying {{$_->user->first_name . ' '. $_->user->last_name}}..."
                                    style="font-size: 13px;" required></textarea>
                          <input type="hidden" name="topic" value="{{base64_encode($topic->id)}}">
                          <input type="hidden" name="is_replying" value="1">
                          <input type="hidden" name="thread" value="{{base64_encode($_->id)}}">
                          <div class="d-flex position-absolute end-0" style="top: -11px">
                            <button class="btn btn-sm btn-success mt-3 rep_btn ms-auto rounded-5" style="">Reply
                            </button>
                          </div>
                        </form>

                        <footer class="w-100 mb-n3">
                          <span class="badge bg-info reply_user cursor-pointer">
                           <i class="bi bi-reply"></i> Reply {{$_->user->first_name . ' '. $_->user->last_name}}
                          </span>
                        </footer>
                      @endauth
                    </article>
                  @empty
                    <h4 class="text-muted mt-n3 py-2">Reply this thread</h4>
                  @endforelse
                </div>

                <div>
                  {{$threads->onEachSide(10)->links()}}
                </div>
              </div>
            </section>

          </div>

          <aside class="col-lg-4 col-md-12 col-12 mt-lg-n22">
            <!-- Card -->
            <div class="card position-sticky" style="top: 20px">
              <!-- Card body -->
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="position-relative">
                    <img src="{{$topic->user->avatar}}" alt=""
                         class="rounded-circle avatar-xl">
                    @if($topic->user->is_verified)
                      <a href="#" class="position-absolute mt-2 ms-n3" data-bs-toggle="tooltip"
                         data-placement="top" title="Verifed">
                        <img src="{{asset('assets/images/svg/checked-mark.svg')}}" alt="" height="30"
                             width="30">
                      </a>
                    @endif
                  </div>
                  <div class="ms-4">
                    <h4 class="mb-0">{{$topic->user->first_name . ' ' . $topic->user->last_name}}</h4>
                    <p class="mb-1 fs-6">Author</p>
                    <span class="fs-6">
                    <span class="badge bg-success-soft">
                      <span class="mdi mdi-calendar-check"></span>
                      {{$topic->user->created_at->isoFormat("MMM Do, YYYY")}}
                    </span>
                    </span>
                  </div>
                </div>
                <div class="border-top row mt-3 border-bottom mb-3 g-0">
                  <div class="col">
                    <div class="pe-1 ps-2 py-3 text-center">
                      <h5 class="mb-0">{{$topic->user->forums->count()}}</h5>
                      <span>Forums</span>
                    </div>
                  </div>
                  <div class="col border-start">
                    <div class="pe-1 ps-3 py-3 text-center">
                      <h5 class="mb-0">{{$topic->user->forumTopics->count()}}</h5>
                      <span>Topics</span>
                    </div>
                  </div>
                  <div class="col border-start">
                    <div class="pe-1 ps-3 py-3 text-center">
                      <h5 class="mb-0">{{$topic->user->forumThreads->count()}}</h5>
                      <span>Threads</span>
                    </div>
                  </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, eius!</p>
                <a href="instructor-profile.html" class="btn btn-outline-secondary btn-sm">View Details</a>
              </div>
            </div>
          </aside>
        </div>
        <!-- Card -->
      </div>
    </section>
  </main>

  <!-- footer -->
  @include('partials.footer')
@endsection

@include('forum.partials.script')
