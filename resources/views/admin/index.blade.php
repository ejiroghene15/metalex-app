@extends('admin.layout.master')

@section('title', 'Admin')

@section('body')
  <!-- Container fluid -->
  <section class="container-fluid p-4">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
        <div class="border-bottom pb-4 mb-4 d-lg-flex justify-content-between align-items-center">
          <div class="mb-3 mb-lg-0">
            <h1 class="mb-0 h2 fw-bold">Dashboard</h1>
          </div>

        </div>
      </div>
    </div>

    <div class="row">
      {{-- Articles--}}
      <div class="col-xl-3 col-lg-6 col-md-12 col-12">
        <!-- Card -->
        <div class="card mb-4">
          <!-- Card body -->
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
              <div>
                <span class="fs-6 text-uppercase fw-semi-bold">Articles</span>
              </div>
              <div>
                <span class="fe fe-book-open fs-3 text-primary"></span>
              </div>
            </div>
            <h2 class="fw-bold mb-1">
              {{$post_count}}
            </h2>
            <span class="ms-1 fw-medium">Number of Posts</span>
          </div>
        </div>
      </div>

      {{-- Forums--}}
      <div class="col-xl-3 col-lg-6 col-md-12 col-12">
        <!-- Card -->
        <div class="card mb-4">
          <!-- Card body -->
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
              <div>
                <span class="fs-6 text-uppercase fw-semi-bold">Forums</span>
              </div>
              <div>
                <span class="mdi mdi-forum fs-3 text-primary"></span>
              </div>
            </div>
            <h2 class="fw-bold mb-1">
              {{$forum_count}}
            </h2>
            <span class="ms-1 fw-medium">Number of Forums</span>
          </div>
        </div>
      </div>

      {{-- Threads--}}
      <div class="col-xl-3 col-lg-6 col-md-12 col-12">
        <!-- Card -->
        <div class="card mb-4">
          <!-- Card body -->
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
              <div>
                <span class="fs-6 text-uppercase fw-semi-bold">Threads</span>
              </div>
              <div>
                <span class=" fe fe-user-check fs-3 text-primary"></span>
              </div>
            </div>
            <h2 class="fw-bold mb-1">
              {{$thread_count}}
            </h2>
            <span class="ms-1 fw-medium">Number of Forum Threads</span>
          </div>
        </div>
      </div>

      {{-- Bookmarks--}}
      <div class="col-xl-3 col-lg-6 col-md-12 col-12">
        <!-- Card -->
        <div class="card mb-4">
          <!-- Card body -->
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
              <div>
                <span class="fs-6 text-uppercase fw-semi-bold">Bookmarked Items</span>
              </div>
              <div>
                <span class="mdi mdi-pin fs-3 text-primary"></span>
              </div>
            </div>
            <h2 class="fw-bold mb-1">
              {{$bookmark_count}}
            </h2>
            <span class="ms-1 fw-medium">Number of Bookmarked Items</span>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <!-- Latest threads in the application -->
      @if($latest_threads_for_dashboard->count())
        <div class=" col-lg-6 col-md-12 col-12 mb-4">
          <!-- Card -->
          <div class="card h-100">
            <!-- Card header -->
            <div class="card-header d-flex align-items-center justify-content-between card-header-height">
              <h4 class="mb-0">Latest Threads</h4>
              <a href="#" class="btn btn-outline-secondary btn-sm">View all</a>
            </div>
            <!-- Card body -->
            <div class="card-body">
              <!-- List group -->
              <ul class="list-group list-group-flush">
                @foreach($latest_threads_for_dashboard as $_)
                  <li class="list-group-item px-0 @if($loop->first) pt-0 @endif">
                    <div class="row">
                      <div class="col-auto">
                        <div class="avatar avatar-sm">
                          <img alt="avatar" src="{{$_->user->avatar}}" class="rounded-circle">
                        </div>
                      </div>

                      <div class="col ms-n3">
                        <h6 class="mb-0 text-gray-600">{{$_->user->fullName()}}
                          <small class="text-success" style="font-size: 9px">replied thread on</small>
                        </h6>
                        <a href="{{ route('forum.thread', ["slug"=> $_->topic->slug, "topic_id" => $_->topic->id]) }}"
                           target="_blank"
                           class="me-2 fs-6 text-gray-500 text-primary-hover stretched-link">
                          {{$_->topic->subject}}
                        </a>
                        <div class="mt-2">
                          <small class="badge bg-info-soft" style="font-size: 10px">{{$_->topic->forum->name ?? ''}}</small>
                        </div>
                      </div>

                      <div class="col-auto">
                          <span class="dropdown dropstart">
                            <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown8"
                               data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown8">
                              <span class="dropdown-header">Settings</span>
                              <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                              <a class="dropdown-item" href="#"><i
                                  class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                            </span>
                          </span>
                      </div>
                    </div>

                  </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      @endif
      <!-- Latest Posts in the application -->
      <div class=" @if($latest_threads_for_dashboard->count()) col-lg-6 @endif col-md-12 col-12 mb-4">
        <div class="card h-100">
          <!-- Card header -->
          <div class="card-header d-flex align-items-center
                              justify-content-between card-header-height">
            <h4 class="mb-0">Latest Posts</h4>
            <a href="{{route('p.articles')}}" target="_blank" class="btn btn-outline-secondary btn-sm">View all</a>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <!-- List group flush -->
            <ul class="list-group list-group-flush">
              <!-- List group -->
              @foreach($posts_for_dashboard as $_)
                <li class="list-group-item px-0 @if($loop->first) pt-0 @endif">
                  <div class="row">
                    <div class="col-auto">
                      <a href="#">
                        <img src="{{$_->thumbnail}}" height="70" width="90"
                             class="img- rounded"></a>
                    </div>
                    <div class="col ps-0">
                      <a href="{{route('full-article', ["article"=> $_->slug, "id" => $_->id])}}" target="_blank"
                         class="stretched-link">
                        <h6 class="text-gray-700 text-primary-hover text-capitalize fs-5">
                          {!! Str::words($_->title, 10, '...') !!}
                        </h6>
                      </a>
                      <div class="d-flex align-items-center">
                        <img src="{{$_->author->avatar}}" alt=""
                             class="rounded-circle avatar-xs me-2">
                        <span class="fs-6">{{$_->author->fullName()}}</span>
                      </div>

                      <p class="fs-6 mt-2 mb-0 text-{{$color_tag}}">{{$_->created_at}}</p>
                    </div>
                  </div>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>

      <!-- My Activity -->
      <div class="col-xl-4 col-lg-12 col-md-12 col-12 mb-4 d-none">
        <!-- Card -->
        <div class="card h-100">
          <!-- Card header -->
          <div class="card-header card-header-height d-flex align-items-center">
            <h4 class="mb-0">Magazines
            </h4>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <!-- List group -->
            <ul class="list-group list-group-flush list-timeline-activity">
              <li class="list-group-item px-0 pt-0 border-0 mb-2">
                <div class="row">
                  <div class="col-auto">
                    <div class="avatar avatar-md avatar-indicators avatar-online">
                      <img alt="avatar" src="../../../assets/images/avatar/avatar-6.jpg" class="rounded-circle">
                    </div>
                  </div>
                  <div class="col ms-n2">
                    <h4 class="mb-0 h5">Dianna Smiley</h4>
                    <p class="mb-1">Just buy the courses”Build React Application Tutorial”</p>
                    <span class="fs-6 text-muted">2m ago</span>
                  </div>
                </div>
              </li>
              <!-- List group -->
              <li class="list-group-item px-0 pt-0  border-0 mb-2">
                <div class="row">
                  <div class="col-auto">
                    <div class="avatar avatar-md avatar-indicators avatar-offline">
                      <img alt="avatar" src="../../../assets/images/avatar/avatar-7.jpg" class="rounded-circle">
                    </div>
                  </div>
                  <div class="col ms-n2">
                    <h4 class="mb-0 h5">
                      Irene Hargrove
                    </h4>
                    <p class="mb-1">Comment on “Bootstrap Tutorial” Says “Hi,I m irene...</p>
                    <span class="fs-6 text-muted">1 hour ago</span>
                  </div>
                </div>
              </li>
              <!-- List group -->
              <li class="list-group-item px-0 pt-0  border-0 mb-2">
                <div class="row">
                  <div class="col-auto">
                    <div class="avatar avatar-md avatar-indicators avatar-busy">
                      <img alt="avatar" src="../../../assets/images/avatar/avatar-4.jpg" class="rounded-circle">
                    </div>
                  </div>
                  <div class="col ms-n2">
                    <h4 class="mb-0 h5">Trevor Bradle</h4>
                    <p class="mb-1">Just share your article on Social Media..</p>
                    <span class="fs-6 text-muted">2 month ago</span>
                  </div>
                </div>
              </li>
              <li class="list-group-item px-0 pt-0 border-0">
                <div class="row">
                  <div class="col-auto">
                    <div class="avatar avatar-md avatar-indicators avatar-away">
                      <img alt="avatar" src="../../../assets/images/avatar/avatar-1.jpg" class="rounded-circle">
                    </div>
                  </div>
                  <div class="col ms-n2">
                    <h4 class="mb-0 h5">John Deo</h4>
                    <p class="mb-1">Just buy the courses”Build React Application Tutorial”</p>
                    <span class="fs-6 text-muted">2m ago</span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

