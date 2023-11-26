@extends('user.layout.master')

@section('title', '- Bookmarks')

@section('body')
  <section class="container-fluid p-4">

    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
        <!-- Page header -->
        <div class="border-bottom pb-4 mb-4 d-md-flex align-items-center justify-content-between">
          <div class="mb-3 mb-md-0">
            <h1 class="mb-1 h2 fw-bold">My Forum Topics</h1>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                @include('user.component.breadcrumb')
                <li class="breadcrumb-item active" aria-current="page">
                  Forum Topics
                </li>
              </ol>
            </nav>
          </div>

          <a href="#" class="btn btn-primary" data-bs-toggle="modal"
             data-bs-target="#start-discussion">New Topic...</a>
        </div>
      </div>
    </div>

    <div class="row">
      <!-- Card body -->
      <ul class="list-group list-group-flush">
        @forelse($user->forumTopics as $_)
          <li class="p-3 card mb-3">
            <div class="d-xl-flex">

              <!-- text -->
              <article class="ms-xl-3 w-100 mt-3 mt-xl-1">
                <nav class="mb-2">
                  <h5 class="mb-2 fs-4 d-flex">
                    <a href="{{ route('forum.thread', ["slug"=> $_->slug, "topic_id" => $_->id]) }}" target="_blank"
                       class="text-gray-600 d-block me-3 stretched-link">
                      {{$_->subject}}
                    </a>

                    {{--                    <span class="ms-auto bi bi-bookmark text-muted bookmark"></span>--}}
                    <span class="badge p-2 bg-info-soft ms-auto align-self-start"><i
                        class="bi bi-chat-square"></i>
                      {{$_->threads->count()}}
                    </span>
                  </h5>

                  <div class="d-flex align-items-center a gap-3">
                    <span class="badge bg-primary-soft">{{$_->forum->name}}</span>
                    <span class="text-success fs-6 fw-semi-bold">
                      <i class="bi bi-calendar-date"></i> {{$_->created_at}}
                    </span>
                  </div>
                </nav>

                <div class="d-flex align-items-center a gap-3">
                  @if($_->threads->count())
                    <span class="text-muted">
                    <small class="fw-semi-bold ">Last reply  by</small>
                    <h6 class="text-muted d-inline-block">
                      <span>{{$_->threads->last()->user->fullName()}}</span>
                      <span class="d-inline-block"></span>
                    <span>{{$_->threads->last()->created_at->diffForHumans() }}</span>
                    </h6>
                  </span>
                  @endif

                  <span class="badge p-2 bg-danger-soft ms-auto align-self-start d-none"><i
                      class="bi bi-trash3"></i>
                    </span>
                </div>

              </article>
            </div>

          </li>
        @empty
          <h5 class="mb-0 text-muted">No topic has been created in this forum.</h5>
        @endforelse
      </ul>
    </div>
  </section>
@endsection

@section('scripts')
  @parent
@endsection
