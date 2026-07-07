@extends('admin.layout.master')

@section('title', 'Books')

@section('body')
  <section class="container-fluid p-4">
    <header class="row">
      <div class="col-lg-12 col-md-12 col-12">
        <div class="border-bottom pb-4 mb-4 d-md-flex align-items-center justify-content-between">
          <div class="mb-3 mb-md-0">
            <h1 class="mb-1 h2 fw-bold">Books</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Books</li>
              </ol>
            </nav>
          </div>
          <div>
            <a href="{{route('book.create')}}" class="btn btn-primary">Upload Book</a>
          </div>
        </div>
      </div>
    </header>

    <section class="row">
      @forelse($books as $book)
        <article class="col-lg-3 col-md-6 col-12">
          <div class="card mb-4 card-hover">
            <a href="#" class="bg-gradient-mix-shade card-img-top">
              <img src="{{ $book->cover_image ? Storage::url('book_covers/'. $book->cover_image) : asset('assets/images/placeholder.jpg') }}"
                   alt="{{ $book->title }}"
                   class="card-img-top rounded-md"
                   style="height: 350px; object-fit: cover; transform: scale(.98); object-position: center">
            </a>

            <footer class="card-footer">
              <div class="mb-2">
                <span class="badge bg-info-soft text-info">{{ $book->category }}</span>
                <span class="badge bg-success-soft text-success">{{ $book->status }}</span>
              </div>
              <h5 class="lh-3 fs-5 mb-1">{{ Str::limit($book->title, 50) }}</h5>
              <p class="text-muted mb-3 small">By {{ $book->authors }}</p>

              <div class="d-flex justify-content-between align-items-center">
                <span class="fw-bold">{{ $book->price > 0 ? $book->currency . ' ' . number_format($book->price, 2) : 'Free' }}</span>

                <div class="d-flex gap-2">
                  <form method="post" action="{{ route('book.delete', ['id' => $book->id]) }}" onsubmit="return confirm('Are you sure you want to delete this book?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-outline-danger">
                      <i class="fe fe-trash-2"></i>
                    </button>
                  </form>
                </div>
              </div>
            </footer>
          </div>
        </article>
      @empty
        <div class="col-12">
          <div class="alert alert-info">No books found. <a href="{{ route('book.create') }}">Upload one</a></div>
        </div>
      @endforelse
    </section>
  </section>
@endsection
