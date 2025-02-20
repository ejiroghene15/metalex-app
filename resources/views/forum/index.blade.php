@extends('layout.master')

@section('title', 'Forums')

@section('body')
  <!-- Navbar -->
  @include('partials.navbar')

  <main class="mb-5">
    <header class="pt-8 bg-light-gradient-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mb-8">
              <span
                class="badge p-3 bg-info-soft mb-3 d-inline-block text-uppercase fw-bold ls-lg">Metalex Legal Forum</span>
              <h3 class="mb-2 display-5 fw-bold">Your Personalized Space for Legal Dialogue and Insights</h3>
              <h4 class="text-muted lh-3">Explore our wide range of topics and join the conversation. Ask questions, share your thoughts, and be part of the discussion. Your legal insights matters.</h4>
            </div>
          </div>
        </div>
        @auth
          <a href="{{route('forum.all')}}" class="btn btn-success btn-sm d-inline-block mb-3">Create Forum</a>
        @else
          <a class="btn btn-sm bg-primary-soft d-inline-block mb-3" href="{{route('login')}}">Login to create a
            forum</a>
        @endauth
      </div>

    </header>

    <div class="container">
      <section class="row">
        <div class="col-md-12">
          <!-- Nav tab -->
          <ul class="nav nav-lb-tab mb-3 pt-3 flex-nowrap overflow-scroll overflow-y-hidden" id="pills-tab"
              role="tablist">
            @foreach($forums as $_)
              <li class="nav-item" role="presentation">
                <a class="nav-link @if($loop->first) show active @endif" id="pills-{{$_->slug}}-tab"
                   data-bs-toggle="pill"
                   href="#pills-{{$_->slug}}"
                   role="tab"
                   aria-controls="pills-{{$_->slug}}" aria-selected="false">
                  <span>{{$_->name}}</span>
                  <span class="badge ms-1 bg-gray-600">{{$_->forum->count()}}</span>
                </a>
              </li>
            @endforeach
          </ul>

          <!-- Tab content -->
          <div class="tab-content" id="pills-tabContent">
            @foreach($forums as $_)
              <div class="tab-pane fade @if($loop->first) show active @endif" id="pills-{{$_->slug}}" role="tabpanel"
                   aria-labelledby="pills-{{$_->slug}}-tab">
                <ul class="list-group list-group-flush m-0">
                  @forelse($_->forum as $_)
                    <!-- List group item -->
                    <li class="list-group-item py-3">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-start">
                            <span class="icon-shape bg-info-soft icon-sm rounded-circle me-3"><i
                                class="mdi mdi-forum"></i>
                            </span>
                          <a href="{{ route('forum.topics', ["slug"=> $_->slug, "id" => $_->id]) }}"
                             class="text-muted">
                            <h5 class="mb-0 text-gray-700">{{$_->name}}</h5>
                            <h6 class="mt-1 text-muted mb-2 me-4">{{$_->description}}</h6>

                            <span class="mb-0 badge bg-success-soft" data-bs-toggle="tooltip" data-placement="right"
                                  title="Date Created">
                                <i class="bi bi-calendar-check me-1"></i>{{$_->created_at->isoFormat("Do, MMM YYYY")}}
                              </span>
                            <span class="mb-0 badge bg-primary-soft" data-bs-toggle="tooltip" data-placement="right"
                                  title="Topics in this forum">
                                <i class="bi bi-book me-1"></i>{{$_->topics->count()}}
                              </span>
                            <span class="mb-0 badge bg-danger-soft" data-bs-toggle="tooltip" data-placement="right"
                                  title="Messages">
                                <i class="bi bi-chat-square me-1"></i>{{$_->threads->count()}}
                              </span>

                          </a>
                        </div>
                      </div>
                    </li>
                  @empty
                    <h4 class="text-muted">Create your first forum under this category</h4>

                    <h5 class="text-muted">{{$_->description}}</h5>
                  @endforelse
                </ul>
              </div>
            @endforeach
          </div>
        </div>
      </section>
    </div>
  </main>

  <!-- footer -->
  @include('partials.footer')
@endsection


@section('scripts')
  @parent
  <script src="{{asset('assets/js/vendors/ckeditor.js')}}"></script>
  <script src="{{asset('assets/js/custom/init_editor.js')}}"></script>
  <script>CKClassicEditor()</script>
@endsection