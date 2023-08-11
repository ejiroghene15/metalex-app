@extends('user.layout.master')

@section('title', 'New Post')

@section('body')
  <section class="container-fluid p-4">
    <div class="row">
      <!-- Page Header -->
      <div class="col-lg-12 col-md-12 col-12">
        <div class="border-bottom pb-4 mb-4 d-md-flex align-items-center justify-content-between">
          <div class="mb-3 mb-md-0">
            <h1 class="mb-1 h2 fw-bold">All Posts</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                @include('user.component.breadcrumb')
                <li class="breadcrumb-item active" aria-current="page">
                  Blog Posts
                </li>
              </ol>
            </nav>
          </div>
          <div>
            <a href="{{route('user.blog.create')}}" class="btn btn-primary">New Post</a>
          </div>
        </div>
      </div>
    </div>

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
            </ul>
          </header>

          <div>
            <div class="tab-content" id="tabContent">
              <!-- Tab -->
              <div class="tab-pane fade show active" id="all-post" role="tabpanel" aria-labelledby="all-post-tab">
                <div class="table-responsive">
                  <!-- Table -->
                  <table class="table mb-0 text-nowrap table-borderless table-hover dt" >
                    <!-- Table Head -->
                    <thead class="table-light">
                    <tr>
                      <th hidden></th>
                      <th scope="col">POST</th>
                      <th scope="col">CATEGORY</th>
                      <th scope="col">DATE</th>
                      <th scope="col">STATUS</th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user->blog as $_)
                      <tr>
                        <td hidden>{{$_->id}}</td>
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
                          <span class="badge bg-success-soft">{{$_->status}}</span>
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
                              <a class="dropdown-item" href="{{route('user.blog.edit', $_)}}">
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