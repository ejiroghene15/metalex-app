@extends('admin.layout.master')

@section('title', 'Admin')

@section('body')
  <!-- Container fluid -->
  <section class="container-fluid p-4">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
        <!-- Page header -->
        <div class="border-bottom pb-4 mb-4 d-md-flex align-items-center justify-content-between">
          <div class="mb-3 mb-md-0">
            <h1 class="mb-1 h2 fw-bold">CMS Dashboard</h1>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('admin')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#">CMS</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Overview
                </li>
              </ol>
            </nav>
          </div>
          <div>
            <a href="{{route('cms.post.create')}}" class="btn btn-primary">New Post</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-3 col-lg-6 col-md-12 col-12">
        <!-- Card -->
        <div class="card mb-4">
          <!-- Card body -->
          <div class="card-body">
            <span class="fs-6 text-uppercase fw-semi-bold">Published Posts</span>
            <div class="mt-2 d-flex justify-content-between align-items-center">
              <div class="lh-1">
                <h2 class="h1 fw-bold mb-1">{{$posts->count()}}</h2>
              </div>
              <div>
										<span class="bg-light-primary icon-shape icon-xl rounded-3 text-dark-primary">
											<i class="mdi mdi-text-box-multiple mdi-24px"></i>
										</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-6 col-md-12 col-12">
        <!-- Card -->
        <div class="card mb-4">
          <!-- Card body -->
          <div class="card-body">
            <span class="fs-6 text-uppercase fw-semi-bold">Deleted Posts</span>
            <div class="mt-2 d-flex justify-content-between align-items-center">
              <div class="lh-1">
                <h2 class="h1 fw-bold mb-1">{{$deleted_posts->count()}}</h2>
              </div>
              <div>
										<span class="bg-light-danger icon-shape icon-xl rounded-3 text-dark-danger">
											<i class="mdi mdi-text-box-multiple mdi-24px"></i>
										</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-6 col-md-12 col-12">
        <!-- Card -->
        <div class="card mb-4">
          <!-- Card Body -->
          <div class="card-body">
            <span class="fs-6 text-uppercase fw-semi-bold">Categories</span>
            <div class="mt-2 d-flex justify-content-between align-items-center">
              <div class="lh-1">
                <h2 class="h1 fw-bold mb-1">{{$categories->count()}}</h2>
              </div>
              <div>
										<span class="bg-light-warning icon-shape icon-xl rounded-3 text-dark-warning">
											<i class="mdi mdi-folder-multiple-image mdi-24px"></i>
										</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-6 col-md-12 col-12">
        <!-- Card -->
        <div class="card mb-4">
          <!-- Card Body -->
          <div class="card-body">
            <span class="fs-6 text-uppercase fw-semi-bold">Authors</span>
            <div class="mt-2 d-flex justify-content-between align-items-center">
              <div class="lh-1">
                <h2 class="h1 fw-bold mb-1">
                  {{$posts->pluck('user_id')->unique()->count()}}
                </h2>
              </div>
              <div>
										<span class="bg-light-success icon-shape icon-xl rounded-3 text-dark-success">
											<i class="mdi mdi-account-multiple mdi-24px"></i>
										</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
        <!-- Card -->
        <div class="card mb-4">
          <!-- Card header -->
          <div
            class="card-header d-flex justify-content-between align-items-center border-bottom-0 card-header-height">
            <h4 class="mb-0">Recent Posts</h4>
            <span class="dropdown dropstart">
									<a class="btn-icon btn bg-info-soft btn-sm rounded-circle" href="{{route('cms.post')}}">
										<i class="fe fe-eye"></i>
									</a>
            </span>
          </div>
          <!-- Table -->
          <div class="table-responsive border-0 overflow-y-hidden">
            <table class="table mb-0 text-nowrap table-hover">
              <!-- Table Head -->
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
              @foreach($posts->take(10) as $_)
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
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

