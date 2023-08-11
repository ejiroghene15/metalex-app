@extends('admin.layout.master')

@section('title', 'Category')

@section('body')

  @error('name')
  <x-alert status="danger" message="{{$message}}" :/>
  @enderror

  <section class="container-fluid p-4">
    <div class="row">
      <!-- Page Header -->
      <div class="col-lg-12 col-md-12 col-12">
        <div class="border-bottom pb-4 mb-4 d-md-flex align-items-center justify-content-between">
          <div class="mb-3 mb-md-0">
            <h1 class="mb-1 h2 fw-bold">Category</h1>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('admin')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="{{route('cms')}}">CMS</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Category
                </li>
              </ol>
            </nav>
          </div>
          <div>
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCatgory">Add New
              Category</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
        <!-- Card -->
        <div class="card mb-4 ">
          <div class="table-responsive border-0 overflow-y-hidden">
            <table class="table mb-0 text-nowrap table-centered table-hover table-with-checkbox">
              <thead>
              <tr>
                <th hidden>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="checkAll">
                    <label class="form-check-label" for="checkAll"></label>
                  </div>
                </th>
                <th>CATEGORY</th>
                <th>SLUG</th>
                <th>POSTS</th>
                <th>DATE CREATED</th>
                <th>DATE UPDATED</th>
              </tr>
              </thead>
              <tbody>
              @foreach($categories as $_)
                <tr>
                  <td hidden>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="categoryCheck9">
                      <label class="form-check-label" for="categoryCheck9"></label>
                    </div>
                  </td>
                  <td>
                    <a href="#" class="text-inherit">
                      <h5 class="mb-0 text-primary-hover">{{$_->name}}</h5>
                    </a>
                  </td>
                  <td>
                    <span class="badge bg-info-soft">{{$_->slug}}</span>
                  </td>
                  <td>
                    <span class="badge bg-success-soft">{{$_->blog_post->count()}}</span>
                  </td>
                  <td>{{$_->created_at}}</td>
                  <td>{{$_->updated_at}}</td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="newCatgory" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel"
       aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title mb-0" id="newCatgoryLabel">
            New Category
          </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="p-3">
          <form method="post" action="{{route('cms.category.store')}}">
            @csrf
            <div class="mb-3 mb-2">
              <label class="form-label" for="title">Name<span class="text-danger">*</span></label>
              <input type="text" class="form-control" placeholder="Category Name" name="name">
            </div>
            <div>
              <button type="submit" class="btn btn-sm btn-primary">Add New Category</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
