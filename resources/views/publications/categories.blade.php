@extends('publications.layout')

@section('title', 'Publication - Categories')

@section('publication_content')
  <header class="mb-5">
    <h4 class="text-gray-600">You can find our articles across the categories listed below </h4>
  </header>

  <section class="container-fluid">
    <div class="row">
      @foreach($categories as $_)
        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
          <!-- Card -->
          <div class="card mb-4 card-hover">
            <div class="d-flex justify-content-between align-items-center p-4">
              <div class="d-flex">
                <a href="{{route('single-category', ["category"=> $_->slug, "id" => $_->id])}}" class="stretched-link">
                  <!-- Img -->
                  <img src="{{asset('assets/images/png/writing.png')}}" alt="" class="avatar-sm"></a>
                <div class="ms-3">
                  <h4 class="mb-1">{{$_->name}}</h4>
                  <p class="mb-0 fs-6">
                  <span class="me-2 badge bg-primary-soft fw-semi-bold"><span class="text-dark fw-medium">
                      {{$_->blog_post->count()}}
                    </span>
                    Posts
                  </span>
                    <span class="badge bg-info-soft fw-semi-bold">
                      <span class="text-dark fw-medium">{{$_->blog_post->pluck('user_id')->unique()->count()}} </span>
                    Authors
                    </span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>
@endsection
