@extends('layout.master')

@section('title', "Publication - Category | $category->name")

@php
  $post = $category->blog_post()->paginate($paginate_per_page)->fragment('article');
@endphp

@section('body')
  <!-- Navbar -->
  @include('partials.navbar')

  <main class="mb-5">
    <!-- Page header -->
    <header class="py-6 bg-dark"></header>

    <section class="bg-white shadow-sm mb-6">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <div class="d-md-flex align-items-center justify-content-between bg-white  pt-3 pb-3 pb-lg-5">
              <div class="d-md-flex align-items-center text-lg-start text-center ">
                <div class="me-3  mt-n8">
                  <img src="{{asset('assets/images/png/book.png')}}" class="avatar-xxl rounded border p-4 bg-white "
                       alt="">
                </div>

                <div class="mt-3 mt-md-0">
                  <h1 class="mb-0 fw-bold me-3">{{$category->name}}</h1>
                </div>

              </div>
            </div>

            <!-- Nav tab -->
            <ul class="nav nav-lt-tab">
              <li class="nav-item ms-0" role="presentation">
                <a
                  href="{{route('p.articles')}}" @class(['nav-link', 'active'=> Route::currentRouteName() === 'p.articles'])>
                  Articles
                </a>
              </li>
              <li class="nav-item" role="presentation">
                <a
                  href="{{route('p.magazine')}}" @class(['nav-link', 'active'=> Route::currentRouteName() === 'p.magazine'])>
                  Magazines
                </a>
              </li>
              <li class="nav-item" role="presentation">
                <a
                  href="{{route('p.category')}}" @class(['nav-link', 'active'=> Route::currentRouteName() === 'p.category'])>
                  Categories
                </a>
              </li>
              <li class="nav-item d-none" role="presentation">
                <a
                  href="{{route('p.authors')}}" @class(['nav-link', 'active'=> Route::currentRouteName() === 'p.authors'])>
                  Authors
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="container-fluid">

      <section class="row" style="row-gap: 50px">
        @foreach($post as $_)
          <article class="col-xl-4 col-lg-4 col-md-6 col-12">
            <!-- Card -->
            <div class="card mb-4 shadow-lg h-100">
              <a href="{{route('full-article', ["article"=> $_->slug, "id" => $_->id])}}"
                 class="card-img-top stretched-link pt-2 px-2">
                <img src="{{$_->thumbnail}}" class="card-img-top rounded-top-md"
                     style="height: 250px; object-fit: cover"
                     alt="">
              </a>
              <!-- Card body -->
              <div class="card-body d-flex flex-column">
                <a href="#" style="width: max-content"
                   class="fs-6 fw-semi-bold d-inline-block mb-3 badge bg-{{$color_tag}}-soft">{{$_->b_category->name}}</a>
                <h4>
                  <a href="{{route('full-article', ["article"=> $_->slug, "id" => $_->id])}}" class="text-inherit">
                    {{$_->title}}
                  </a>
                </h4>
                <p>{!! Str::limit($_->body, 100) !!}</p>
                <!-- Media content -->
                <div class="row align-items-center g-0 mt-4 mt-auto">
                  <div class="col-auto">
                    <img src="{{$_->author->avatar}}" alt=""
                         class="rounded-circle avatar-sm me-2">
                  </div>
                  <div class="col lh-1">
                    <h5 class="mb-1 text-gray-600">{{$_->author->fullName()}}</h5>
                    <p class="fs-6 mb-0 text-{{$color_tag}}">{{$_->created_at}}</p>
                  </div>
                  <div class="col-auto" hidden>
                    <p class="fs-6 mb-0">20 Min Read</p>
                  </div>
                </div>
              </div>
            </div>
          </article>
        @endforeach
      </section>

      @if($post->count())
        <footer class="mt-5 d-flex justify-content-center">
          {{$post->onEachSide(10)->links()}}
        </footer>
      @endif
    </section>
  </main>

  <!-- footer -->
  @include('partials.footer')
@endsection



