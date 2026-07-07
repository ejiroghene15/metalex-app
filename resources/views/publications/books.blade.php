@extends('publications.layout')

@section('title', 'Publication - Books')

@section('publication_content')
  <header class="mb-5">
    <h4 class="text-gray-600">Books</h4>
  </header>

  <section class="row">
    @forelse($books as $book)
      <article class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
        <!-- Card -->
        <div class="card mb-4 card-hover">
          <a href="#" class="bg-gradient-mix-shade card-img-top" data-bs-toggle="modal"
             data-bs-target="#book-details-{{$book->id}}">
            <img src="{{Storage::url('book_covers/'. $book->cover_image)}}" alt="{{$book->title}}"
                 class="card-img-top rounded-md"
                 style="height: 280px; object-fit: cover; transform: scale(.98); object-position: 0 -2px">
          </a>

          <!-- Card footer -->
          <footer class="card-footer">
            <h5 class="text-primary">{{$book->category}}</h5>
            <h5 class="lh-3 fs-6 mb-1">{{$book->title}}</h5>
            <p class="text-muted mb-2 fs-6"><i class="bi bi-person me-1"></i>{{$book->authors}}</p>
            <a href="#" class="btn btn-sm bg-info-soft" data-bs-toggle="modal"
               data-bs-target="#book-details-{{$book->id}}">
              <i class="bi bi-eye me-1"></i> View Details
            </a>
          </footer>
        </div>
      </article>

      <!-- Book details modal -->
      <div class="modal fade" id="book-details-{{$book->id}}" tabindex="-1"
           aria-labelledby="book-details-label-{{$book->id}}" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="book-details-label-{{$book->id}}">{{$book->title}}</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-4 col-12 mb-3">
                  <img src="{{Storage::url('book_covers/'. $book->cover_image)}}" alt="{{$book->title}}"
                       class="img-fluid rounded w-100" style="object-fit: cover">

                  @if($book->price)
                    <div class="mt-3 text-center">
                      <span class="badge bg-primary fs-5">{{$book->currency}} {{number_format($book->price, 2)}}</span>
                    </div>
                  @endif
                </div>
                <div class="col-md-8 col-12">
                  @if($book->subtitle)
                    <p class="text-muted fst-italic">{{$book->subtitle}}</p>
                  @endif

                  <ul class="list-group list-group-flush mb-3">
                    <li class="list-group-item px-0"><strong>Author(s):</strong> {{$book->authors}}</li>
                    <li class="list-group-item px-0"><strong>Category:</strong> {{$book->category}}</li>
                    @if($book->isbn)
                      <li class="list-group-item px-0"><strong>ISBN:</strong> {{$book->isbn}}</li>
                    @endif
                    @if($book->edition)
                      <li class="list-group-item px-0"><strong>Edition:</strong> {{$book->edition}}</li>
                    @endif
                    @if($book->publication_date)
                      <li class="list-group-item px-0">
                        <strong>Publication Date:</strong> {{date('jS F, Y', strtotime($book->publication_date))}}
                      </li>
                    @endif
                    @if($book->publisher)
                      <li class="list-group-item px-0"><strong>Publisher:</strong> {{$book->publisher}}</li>
                    @endif
                    @if($book->language)
                      <li class="list-group-item px-0"><strong>Language:</strong> {{$book->language}}</li>
                    @endif
                    @if($book->number_of_pages)
                      <li class="list-group-item px-0"><strong>Pages:</strong> {{$book->number_of_pages}}</li>
                    @endif
                    @if($book->format)
                      <li class="list-group-item px-0"><strong>Format:</strong> {{$book->format}}</li>
                    @endif
                    @if($book->tags)
                      <li class="list-group-item px-0">
                        <strong>Tags:</strong>
                        @foreach(explode(',', $book->tags) as $tag)
                          <span class="badge bg-secondary-soft me-1">{{trim($tag)}}</span>
                        @endforeach
                      </li>
                    @endif
                  </ul>

                  @if($book->short_description)
                    <h6 class="text-uppercase text-muted">Description</h6>
                    <p>{{$book->short_description}}</p>
                  @endif

                  @if($book->about_book)
                    <h6 class="text-uppercase text-muted">About This Book</h6>
                    <p>{!! nl2br(e($book->about_book)) !!}</p>
                  @endif

                  @if($book->table_of_contents)
                    <h6 class="text-uppercase text-muted">Table of Contents</h6>
                    <p>{!! nl2br(e($book->table_of_contents)) !!}</p>
                  @endif
                </div>
              </div>
            </div>
            <div class="modal-footer">
              @if($book->external_link)
                <a href="{{$book->external_link}}" target="_blank" class="btn btn-sm bg-info-soft">
                  <i class="bi bi-box-arrow-up-right me-1"></i> Get This Book
                </a>
              @endif
              <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    @empty
      <div class="col-12">
        <div class="text-center py-6">
          <i class="bi bi-book fs-1 text-muted"></i>
          <p class="text-muted mt-2">No books have been published yet. Please check back later.</p>
        </div>
      </div>
    @endforelse
  </section>
@endsection
