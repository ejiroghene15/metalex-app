@extends('publications.layout')

@section('title', 'Publication - Magazines')

@section('publication_content')
  <header class="mb-5">
    <h4 class="text-gray-600">Magazines</h4>
  </header>

  <section class="row">
    @for($i = 0; $i < 6; $i++)
      <article class="col-lg-3 col-md-6 col-12">
        <!-- Card -->
        <div class="card  mb-4 card-hover">
          <a href="#" class="bg-gradient-mix-shade card-img-top" >
            <img src="{{asset('assets/images/magazine/cover.jpg')}}" alt=""
                 class="card-img-top rounded-top-md">
          </a>

          <!-- Card footer -->
          <footer class="card-footer">
            <h5 class="text-primary">Vol 1, Issue 1</h5>
            <h4>An Ultimate Guide for Beginners Bootstrap 5</h4>
            <a class="btn btn-sm bg-success-soft">Download Magazine </a>
          </footer>
        </div>
      </article>
    @endfor
  </section>
@endsection
