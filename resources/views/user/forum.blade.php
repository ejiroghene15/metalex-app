@extends('user.layout.master')

@section('title', '- My Forum')

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
        <!-- Card header -->
        <div class="card-header d-lg-flex align-items-center justify-content-between">
          <div class="mb-3 mb-lg-0">
            <h3 class="mb-0">My Forums</h3>
            <span>
                  You have full control to manage your own forum
                </span>
          </div>
          <div>
            <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
               data-bs-target="#create-forum">New Forum...</a>
          </div>
        </div>
        <!-- Card body -->
        <div class="card-body px-0 pb-2">
          <ul class="list-group list-group-flush">
            @forelse($user->forums as $_)
              <!-- List group item -->
              <li class="list-group-item @if(!$loop->first)py-3 @else pt-0 @endif">
                <div class="d-flex justify-content-between">
                  <div class="d-flex align-items-start">
                    <img src="{{ asset('assets/images/avatar/conversation.png') }}" class="me-2" height="28"
                         width="28" alt="">
                    <a href="{{ route('forum.topics', ['slug' => $_->slug, 'id' => $_->id]) }}"
                       class="text-muted">
                      <h5 class="mb-0">{{ $_->name }}</h5>
                      <p class="mt-1 mb-1 me-4 fw-600">{{ $_->description }}</p>
                      <p class="my-2 badge bg-info-soft" data-bs-toggle="tooltip" data-placement="right"
                         title="Category">{{$_->category->name}}</p>
                      <span class="mb-0 badge bg-primary-soft" data-bs-toggle="tooltip" data-placement="right"
                            title="Topics in this forum">
                          <i class="bi bi-book me-1"></i>{{ $_->topics->count() }}
                        </span>
                      <span class="mb-0 badge bg-success-soft" data-bs-toggle="tooltip" data-placement="right"
                            title="Date Created">
                          <i class="bi bi-calendar me-1"></i>{{ $_->created_at->isoFormat('Do, MMM YYYY') }}
                        </span>
                    </a>
                  </div>
                  <div>
                      <span class="dropdown dropstart">
                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="forumSetting"
                           data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                          <i class="fe fe-more-vertical"></i>
                        </a>
                        <span class="dropdown-menu" aria-labelledby="forumSetting">
                          <span class="dropdown-header">Setting </span>
{{--                          <a class="dropdown-item" href="#">--}}
                          {{--                            <i class="fe fe-edit dropdown-item-icon"></i>Edit--}}
                          {{--                          </a>--}}
                          <a class="dropdown-item delete_forum" data-bs-toggle="modal"
                             data-bs-target="#delete-forum-modal"
                             data-forum="{{base64_encode($_->id)}}">
                            <i class="fe fe-trash dropdown-item-icon"></i>
                            Remove
                          </a>

                        </span>
                      </span>
                  </div>
                </div>
              </li>
            @empty
              <h5 class="card-body py-0">Create your forum to get started</h5>
            @endforelse
          </ul>
        </div>
      </div>

      @include('user.component.delete_forum')

      <div class="modal fade" id="create-forum" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">New Forum</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form class="modal-body" action="{{ route('forum.create') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label class="form-label">Category</label>
                <select name="forum_category" class="form-control">
                  @foreach ($category as $_)
                    <option value="{{ $_->id }}">{{ $_->name }}</option>
                  @endforeach
                </select>
              </div>

              <div class="mb-3">
                <label class="form-label">
                  <span>Forum Name</span>
                  <span data-bs-toggle="tooltip" data-placement="right"
                        title="The name of your forum, E.g: Legal Analytics, Cyber Security & Data Privacy">
              <i class="fe fe-help-circle"></i>
            </span>
                </label>
                <input class="form-control" name="forum_name" type="text"/>
              </div>

              <div class="mb-3">
                <label class="form-label">
                  <span>Description</span>
                  <span data-bs-toggle="tooltip" data-placement="right"
                        title="This should be a short description about your forum">
              <i class="fe fe-help-circle"></i>
            </span>
                </label>
                <input class="form-control" name="description" maxlength="100" type="text"/>
              </div>

              <button class="btn btn-primary">Save</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
@endsection


@section('scripts')
  @parent
  <script>
    $(".delete_forum").on("click", function () {
      forum_id.value = $(this).data().forum;
    });
  </script>
@endsection