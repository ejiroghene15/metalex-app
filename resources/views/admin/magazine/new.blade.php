@extends('admin.layout.master')

@section('title', 'Upload Magazine')

@section('style')
  @parent
  <link rel="stylesheet" href="{{ asset('assets/css/dropify.min.css') }}">
@endsection

@section('body')
  <section class="container-fluid p-4">
    <header class="row">
      <!-- Page header -->
      <div class="col-lg-12 col-md-12 col-12">
        <div class="border-bottom pb-4 mb-4 d-md-flex align-items-center justify-content-between">
          <div class="mb-3 mb-md-0">
            <h1 class="mb-1 h2 fw-bold">Upload New Magazine</h1>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('admin')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="{{route('magazine.list')}}">Magazine</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Upload Magazine
                </li>
              </ol>
            </nav>
          </div>
          <div>
            <a href="{{route('magazine.list')}}" class="btn btn-outline-secondary">View Magazines</a>
          </div>
        </div>
      </div>
    </header>

    <!-- Card -->
    <div class="card border-0 mb-4">
      <!-- Card body -->
      <div class="card-body">
        <form method="post" action="{{route('upload-magazine')}}" enctype="multipart/form-data">
          @csrf
          <div class="mb-4">
            <label class="form-label">Cover Image</label>
            @error('thumbnail') <small class="d-block text-danger">{{$message}}</small> @enderror
            <!-- input -->
            <input type="file" name="thumbnail" class="form-control dropify">
          </div>

          <div class="row">
            <div class="mb-4 col-md-4">
              <label for="postTitle" class="form-label">Magazine File</label>
              @error('magazine') <small class="d-block text-danger">{{$message}}</small> @enderror
              <input type="file" name="magazine" class="form-control">
            </div>

            <div class="mb-4 col-md-4">
              <!-- Title -->
              <label for="title" class="form-label">Edition</label>
              @error('edition') <small class="d-block text-danger">{{$message}}</small> @enderror
              <input type="text" name="edition" value="{{old('edition')}}" class="form-control text-dark"
                     placeholder="E.g. Vol 1, Issue 2">
            </div>

            <div class="mb-4 col-md-4">
              <!-- Title -->
              <label for="title" class="form-label">Title</label>
              @error('title') <small class="d-block text-danger">{{$message}}</small> @enderror
              <input type="text" name="title" value="{{old('title')}}" class="form-control text-dark"
                     placeholder="E.g. How is Legal Education Preparing Lawyers of the Future?">

            </div>

          </div>

          <!-- button -->
          <button name="upload" value="published" href="#" class="btn btn-primary"> Upload</button>
        </form>
      </div>
    </div>

  </section>
@endsection

@section('scripts')
  @parent
  <script src="{{asset('assets/js/vendors/dropify.js')}}"></script>
  <script>
    if ($('.dropify').length) {
      $('.dropify').dropify();
    }
  </script>
@endsection
