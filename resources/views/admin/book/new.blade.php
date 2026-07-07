@extends('admin.layout.master')

@section('title', 'Upload Book')

@section('style')
  @parent
  <link rel="stylesheet" href="{{ asset('assets/css/dropify.min.css') }}">
@endsection

@section('body')
  <section class="container-fluid p-4">
    <header class="row">
      <div class="col-lg-12 col-md-12 col-12">
        <div class="border-bottom pb-4 mb-4 d-md-flex align-items-center justify-content-between">
          <div class="mb-3 mb-md-0">
            <h1 class="mb-1 h2 fw-bold">Upload New Book</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('book.list')}}">Books</a></li>
                <li class="breadcrumb-item active" aria-current="page">Upload Book</li>
              </ol>
            </nav>
          </div>
          <div>
            <a href="{{route('book.list')}}" class="btn btn-outline-secondary">View Books</a>
          </div>
        </div>
      </div>
    </header>

    <div class="card border-0 mb-4">
      <div class="card-body">
        <form method="post" action="{{route('upload-book')}}" enctype="multipart/form-data">
          @csrf

          <h4 class="mb-3">Basic Information</h4>
          <div class="row">
            <div class="mb-4 col-md-12">
              <label class="form-label">Book Cover (Image Upload)</label>
              @error('thumbnail') <small class="d-block text-danger">{{$message}}</small> @enderror
              <input type="file" name="thumbnail" class="form-control dropify" data-max-file-size="2M">
            </div>

            <div class="mb-4 col-md-6">
              <label class="form-label">Book Title</label>
              @error('title') <small class="d-block text-danger">{{$message}}</small> @enderror
              <input type="text" name="title" value="{{old('title')}}" class="form-control" placeholder="Enter book title">
            </div>

            <div class="mb-4 col-md-6">
              <label class="form-label">Subtitle (Optional)</label>
              <input type="text" name="subtitle" value="{{old('subtitle')}}" class="form-control" placeholder="Enter subtitle">
            </div>

            <div class="mb-4 col-md-6">
              <label class="form-label">Author(s)</label>
              @error('authors') <small class="d-block text-danger">{{$message}}</small> @enderror
              <input type="text" name="authors" value="{{old('authors')}}" class="form-control" placeholder="Enter author names">
            </div>

            <div class="mb-4 col-md-6">
              <label class="form-label">ISBN (Optional)</label>
              <input type="text" name="isbn" value="{{old('isbn')}}" class="form-control" placeholder="Enter ISBN">
            </div>

            <div class="mb-4 col-md-4">
              <label class="form-label">Edition</label>
              <input type="text" name="edition" value="{{old('edition')}}" class="form-control" placeholder="e.g. 1st Edition">
            </div>

            <div class="mb-4 col-md-4">
              <label class="form-label">Publication Date</label>
              <input type="date" name="publication_date" value="{{old('publication_date')}}" class="form-control">
            </div>

            <div class="mb-4 col-md-4">
              <label class="form-label">Publisher</label>
              <input type="text" name="publisher" value="{{old('publisher')}}" class="form-control" placeholder="Enter publisher">
            </div>

            <div class="mb-4 col-md-4">
              <label class="form-label">Language</label>
              <input type="text" name="language" value="{{old('language')}}" class="form-control" placeholder="e.g. English">
            </div>

            <div class="mb-4 col-md-4">
              <label class="form-label">Category</label>
              @error('category') <small class="d-block text-danger">{{$message}}</small> @enderror
              <select name="category" class="form-select">
                <option value="">Select Category</option>
                <option value="Law">Law</option>
                <option value="Business">Business</option>
                <option value="Technology">Technology</option>
                <option value="AI">AI</option>
                <option value="Entrepreneurship">Entrepreneurship</option>
                <option value="Corporate Governance">Corporate Governance</option>
                <option value="Young Lawyers">Young Lawyers</option>
                <option value="Others">Others</option>
              </select>
            </div>

            <div class="mb-4 col-md-4">
              <label class="form-label">Tags/Keywords</label>
              <input type="text" name="tags" value="{{old('tags')}}" class="form-control" placeholder="e.g. law, technology, ai">
            </div>
          </div>

          <hr class="my-4">
          <h4 class="mb-3">Book Details</h4>
          <div class="row">
            <div class="mb-4 col-md-12">
              <label class="form-label">Short Description (150–300 characters)</label>
              <textarea name="short_description" class="form-control" rows="3" placeholder="Enter short description">{{old('short_description')}}</textarea>
            </div>

            <div class="mb-4 col-md-12">
              <label class="form-label">About the Book (Rich Text)</label>
              <textarea name="about_book" id="editor" class="form-control">{{old('about_book')}}</textarea>
            </div>

            <div class="mb-4 col-md-12">
              <label class="form-label">Table of Contents (Optional)</label>
              <textarea name="table_of_contents" class="form-control" rows="5" placeholder="Enter table of contents">{{old('table_of_contents')}}</textarea>
            </div>

            <div class="mb-4 col-md-6">
              <label class="form-label">Number of Pages</label>
              <input type="number" name="number_of_pages" value="{{old('number_of_pages')}}" class="form-control" placeholder="e.g. 250">
            </div>

            <div class="mb-4 col-md-6">
              <label class="form-label">Format</label>
              <select name="format" class="form-select">
                <option value="PDF">PDF</option>
                <option value="EPUB">EPUB</option>
                <option value="Paperback">Paperback</option>
                <option value="Hardcover">Hardcover</option>
              </select>
            </div>
          </div>

          <hr class="my-4">
          <div class="row">
            <div class="col-md-6">
              <h4 class="mb-3">Access</h4>
              <div class="row">
                <div class="mb-4 col-md-6">
                  <label class="form-label">Price</label>
                  <input type="number" step="0.01" name="price" value="{{old('price')}}" class="form-control" placeholder="0.00">
                </div>
                <div class="mb-4 col-md-6">
                  <label class="form-label">Currency</label>
                  <select name="currency" class="form-select">
                    <option value="USD">USD</option>
                    <option value="NGN">NGN</option>
                    <option value="GBP">GBP</option>
                    <option value="EUR">EUR</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <h4 class="mb-3">Status</h4>
              <div class="mb-4">
                <label class="form-label">Status</label>
                <select name="status" class="form-select">
                  <option value="Free">Free</option>
                  <option value="Paid">Paid</option>
                  <option value="Coming Soon">Coming Soon</option>
                  <option value="Out of Stock">Out of Stock</option>
                </select>
              </div>
            </div>
          </div>

          <hr class="my-4">
          <h4 class="mb-3">Upload File or External Link</h4>
          <div class="row">
            <div class="mb-4 col-md-6">
              <label class="form-label">Upload PDF/EPUB</label>
              @error('book_file') <small class="d-block text-danger">{{$message}}</small> @enderror
              <input type="file" name="book_file" class="form-control">
            </div>
            <div class="mb-4 col-md-6">
              <label class="form-label">External Purchase Link</label>
              <input type="url" name="external_link" value="{{old('external_link')}}" class="form-control" placeholder="https://example.com/buy-book">
            </div>
          </div>

          <div class="mt-4">
            <button type="submit" class="btn btn-primary">Upload Book</button>
          </div>
        </form>
      </div>
    </div>
  </section>
@endsection

@section('scripts')
  @parent
  <script src="{{asset('assets/js/vendors/dropify.js')}}"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
  <script>
    if ($('.dropify').length) {
      $('.dropify').dropify();
    }
    ClassicEditor
      .create(document.querySelector('#editor'))
      .catch(error => {
        console.error(error);
      });
  </script>
@endsection
