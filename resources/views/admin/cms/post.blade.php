@extends('admin.layout.master')

@section('title', 'New Post')

@section('body')
  <section class="container-fluid p-4">
    <header class="row">
      <!-- Page Header -->
      <div class="col-lg-12 col-md-12 col-12">
        <div class="border-bottom pb-4 mb-4 d-md-flex align-items-center justify-content-between">
          <div class="mb-3 mb-md-0">
            <h1 class="mb-1 h2 fw-bold">All Posts</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('admin')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="{{route('cms')}}">CMS</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  All Post
                </li>
              </ol>
            </nav>
          </div>
          <div>
            <a href="{{route('cms.post.create')}}" class="btn btn-primary">New Post</a>
          </div>
        </div>
      </div>
    </header>

    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
        <!-- Card -->
        <div class="card rounded-3">
          <!-- Card Header -->
          <header class="card-header  p-0">
            <ul class="nav nav-lb-tab border-bottom-0" id="tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="all-post-tab" data-bs-toggle="pill" href="#all-post" role="tab"
                   aria-controls="all-post" aria-selected="true">Published</a>
              </li>
              <li class="nav-item d-none">
                <a class="nav-link" id="published-tab" data-bs-toggle="pill" href="#published" role="tab"
                   aria-controls="published" aria-selected="false">Published</a>
              </li>
              <li class="nav-item d-none">
                <a class="nav-link" id="scheduled-tab" data-bs-toggle="pill" href="#scheduled" role="tab"
                   aria-controls="scheduled" aria-selected="false">Scheduled</a>
              </li>
              <li class="nav-item d-none">
                <a class="nav-link" id="draft-tab" data-bs-toggle="pill" href="#draft" role="tab" aria-controls="draft"
                   aria-selected="false">Draft</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="deleted-tab" data-bs-toggle="pill" href="#deleted" role="tab"
                   aria-controls="deleted" aria-selected="false">Deleted</a>
              </li>
            </ul>
          </header>

          <div>
            <div class="tab-content" id="tabContent">
              <!-- Tab -->
              <div class="tab-pane fade show active" id="all-post" role="tabpanel" aria-labelledby="all-post-tab">
                <div class="table-responsive">
                  <!-- Table -->
                  <table class="table mb-0 text-nowrap table-hover">
                    <!-- Table Head -->
                    <thead class="table-light">
                    <tr>
                      <th scope="col">POST</th>
                      <th scope="col">CATEGORY</th>
                      <th scope="col">DATE</th>
                      <th scope="col">Author</th>
                      <th scope="col" colspan="2">STATUS</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $_)
                      <tr>
                        <td>
                          <h5 class="mb-0">
                            <a href="#" class="text-inherit">
                              {{$_->title}}
                            </a>
                          </h5>
                        </td>
                        <td>
                          {{$_->b_category->name}}
                        </td>

                        <td>{{$_->created_at}}</td>
                        <td>
                          <div class="d-flex align-items-center">
                            <img src="{{$_->author->avatar}}" alt=""
                                 class="rounded-circle avatar-xs me-2"/>
                            <h5 class="mb-0">{{$_->author->fullName()}}</h5>
                          </div>
                        </td>
                        <td>
                          <span class="badge bg-warning-soft">{{$_->status}}</span>
                        </td>
                        <td>
                          <section class="dropdown dropstart">
                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button"
                               id="courseDropdown1" data-bs-toggle="dropdown" data-bs-offset="-20,20"
                               aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="courseDropdown1">
                              <span class="dropdown-header">Action</span>
                              <a class="dropdown-item" href="{{route('cms.post.edit', $_)}}">
                                <i class="fe fe-edit dropdown-item-icon"></i>Edit
                              </a>
                              <form action="{{route('cms.post.delete', $_)}}" method="post">
                                @csrf
                                <button class="dropdown-item">
                                  <i class="fe fe-trash dropdown-item-icon"></i>
                                  Delete
                                </button>
                              </form>
                            </div>
                          </section>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="tab-pane fade" id="deleted" role="tabpanel" aria-labelledby="deleted-tab">
                <div class="table-responsive">
                  <table class="table mb-0 text-nowrap table-centered table-hover table-with-checkbox">
                    <thead class="table-light">
                    <tr>
                      <th scope="col">POST</th>
                      <th scope="col">CATEGORY</th>
                      <th scope="col">DATE</th>
                      <th scope="col">Author</th>
                      <th scope="col">STATUS</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($deleted_posts as $_)
                      <tr>
                        <td>
                          <h5 class="mb-0">
                            <a href="#" class="text-inherit">
                              {{$_->title}}
                            </a>
                          </h5>
                        </td>
                        <td>
                          {{$_->b_category->name}}
                        </td>

                        <td>{{$_->deleted_at}}</td>
                        <td>
                          <div class="d-flex align-items-center">
                            <img src="{{$_->author->avatar}}" alt=""
                                 class="rounded-circle avatar-xs me-2"/>
                            <h5 class="mb-0">{{$_->author->fullName()}}</h5>
                          </div>
                        </td>
                        <td>
                          <span class="badge bg-danger-soft">Deleted</span>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
@endsection


{{--Scripts section--}}
@section('scripts')
  @parent
  {{--  DATATABLES--}}
  <script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
  <script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>

  <script>

    $('.dt').DataTable({
      "order": [
        [0, "desc"]
      ],
    });

  </script>
@endsection