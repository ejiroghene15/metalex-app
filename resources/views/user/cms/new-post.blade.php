@extends('user.layout.master')

@section('title', 'New Post')

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
            <h1 class="mb-1 h2 fw-bold">Add New Post</h1>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                  @include('user.component.breadcrumb')
                  <li class="breadcrumb-item active" aria-current="page">
                    New Blog
                  </li>
              </ol>
            </nav>
          </div>
          <div>
            <a href="{{route('user.blog')}}" class="btn btn-outline-secondary">Back to All Post</a>
          </div>
        </div>
      </div>
    </header>

    <!-- Card -->
    <div class="card border-0 mb-4">
      <!-- Card body -->
      <div class="card-body">
        <form method="post" action="{{route('cms.post.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="mb-4">
            <h5 class="mb-1">Article Thumbnail</h5>
            <p>Add the main image to be displayed for the article.</p>
            @error('thumbnail') <small class="d-block text-danger">{{$message}}</small> @enderror
            <!-- input -->
            <input type="file" name="thumbnail" class="form-control dropify">
          </div>

          <div class="row">
            <div class="mb-4 col-md-6">
              <!-- Title -->
              <label for="postTitle" class="form-label">Title</label>
              @error('title') <small class="d-block text-danger">{{$message}}</small> @enderror
              <input type="text" name="title" value="{{old('title')}}" class="form-control text-dark" placeholder="Post Title">
              <small>Keep your post titles under 60 characters. Write
                heading that describe the topic content.
                Contextualize for Your Audience.</small>
            </div>

            <!-- Category -->
            <div class="mb-4 col-md-6">
              <label class="form-label">Category</label>
              @error('category') <small class="d-block text-danger">{{$message}}</small> @enderror
              <select class="selectpicker" name="category" data-width="100%">
                @foreach ($categories as $_)
                  <option value="{{$_->id}}">{{$_->name}}</option>
                @endforeach
              </select>
            </div>
          </div>

          <!-- Editor -->
          <div class="mt-2 mb-4">
            @error('body') <small class="d-block text-danger">{{$message}}</small> @enderror
            <textarea class="editor" name="body">{{old('body')}}</textarea>
          </div>

          <!-- button -->
          <button name="status" value="published" href="#" class="btn btn-primary"> Publish</button>
        </form>
      </div>
    </div>

  </section>
@endsection

@section('scripts')
  @parent
  <script src="{{asset('assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
  <script src="{{asset('assets/libs/flatpickr/dist/flatpickr.min.js')}}"></script>
  <script src="{{asset('assets/js/vendors/flatpickr.js')}}"></script>
  <script src="{{asset('assets/js/vendors/ckeditor.js')}}"></script>
  <script src="{{asset('assets/js/custom/init_editor.js')}}"></script>
  <script src="{{asset('assets/js/vendors/dropify.js')}}"></script>
  <script>
    CKClassicEditor();
    if ($('.dropify').length) {
      $('.dropify').dropify();
    }
  </script>
@endsection
