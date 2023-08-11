@extends('layout.master')

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
                  <h1 class="mb-0 fw-bold me-3">Publications</h1>
                </div>
                <div class="d-none">
                  <span class="ms-2 badge bg-primary-soft "><span>{{$posts->pluck('user_id')->unique()->count()}}</span>
                  Authors</span>
                  <span class="ms-2 badge bg-success-soft "><span>{{$posts->count()}}</span>
                  Articles</span>
                  <span class="ms-2 badge bg-danger-soft "><span>12</span>
                  Magazines</span>
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
              <li class="nav-item" role="presentation">
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
      @yield('publication_content')
    </section>
  </main>

  <!-- footer -->
  @include('partials.footer')
@endsection
