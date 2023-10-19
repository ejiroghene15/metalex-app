@extends('user.layout.master')

@section('title', '- My Forum')

@section('body')
  <section class="container-fluid p-4">

    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
        <!-- Page header -->
        <div class="border-bottom pb-4 mb-4 d-md-flex align-items-center justify-content-between">
          <div class="mb-3 mb-md-0">
            <h1 class="mb-1 h2 fw-bold">My Forum</h1>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                @include('user.component.breadcrumb')
                <li class="breadcrumb-item" aria-current="page">
                  {{$forum->name}}
                </li>
              </ol>
            </nav>
          </div>

        </div>
      </div>
    </div>

    <div class="row">
      <form method="POST" action="{{route('forum.update', $forum->id)}}" class="col-md-7">
        @csrf
        @method('PUT')
        <div class="card mb-4">
          <header class="card-header">
            <h4 class="card-title mb-0">{{$forum->name}}</h4>
          </header>
          <!-- Card body -->
          <div class="card-body">
            <div class="row">
              <!-- input -->
              <div class="mb-3 col-md-12">
                <label class="form-label" for="phone">Name</label>
                <input type="text" name="name" value="{{$forum->name}}" class="form-control"
                       @if($forum->topics->count()) readonly @endif>
              </div>

              <!-- input -->
              <div class="mb-3 col-md-12">
                <label class="form-label" for="phone">Description</label>
                <input type="text" name="description" value="{{$forum->description}}" class="form-control"
                       @if($forum->topics->count()) readonly @endif>
              </div>

              <!-- input -->
              <div class="mb-3 col-md-12">
                <label class="form-label" for="phone">Forum Rules</label>
                <textarea name="rules" class="editor">{{$forum->rules}}</textarea>
              </div>
            </div>

            <button class="btn btn-success">Update Forum</button>

          </div>
        </div>
      </form>

      <aside class="col-md-5">
        <div class="card">
          <header class="card-header">
            <h4 class="mb-0 card-title">Topics Created</h4>
          </header>

          <ul class="list-group list-group-flush">
            @forelse($forum->topics as $_)
              <li class="p-3 card @if(!$loop->last) mb-3 @endif">
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

                        <span class="badge p-2 bg-danger-soft ms-auto align-self-start">
                          <i class="bi bi-chat-square"></i> {{$_->threads->count()}}
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
                  </article>
                </div>

              </li>
            @empty
              <h5 class="mb-0 text-muted">No topic has been created in this category.</h5>
            @endforelse
          </ul>
        </div>
      </aside>
    </div>
  </section>
@endsection

@section('scripts')
  @parent
  <script src="{{asset('assets/js/vendors/ckeditor.js')}}"></script>
  <script src="{{asset('assets/js/custom/content.js')}}"></script>
  <script>CKClassicEditor();</script>
@endsection