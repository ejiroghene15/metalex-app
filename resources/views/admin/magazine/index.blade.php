@extends('admin.layout.master')

@section('title', 'Magazines')

@section('body')
  <section class="container-fluid p-4">
    <header class="row">
      <!-- Page header -->
      <div class="col-lg-12 col-md-12 col-12">
        <div class="border-bottom pb-4 mb-4 d-md-flex align-items-center justify-content-between">
          <div class="mb-3 mb-md-0">
            <h1 class="mb-1 h2 fw-bold">Magazines</h1>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('admin')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="{{route('magazine.list')}}">Magazines</a></li>
              </ol>
            </nav>
          </div>

        </div>
      </div>
    </header>

    <section class="row">
      @foreach($magazines as $_)
        <article class="col-lg-4 col-md-6 col-12">
          <!-- Card -->
          <div class="card  mb-4 card-hover">
            <a href="#" class="bg-gradient-mix-shade card-img-top">
              <img src="{{Storage::url('magazine_thumbnails/'. $_['image'])}}" alt=""
                   class="card-img-top rounded-md" style="height: 400px; object-fit: cover; transform: scale(.98)">
            </a>

            <!-- Card footer -->
            <footer class="card-footer">
              <h5 class="text-primary">{{$_['label']}}</h5>
              <h5 class="lh-3 fs-6">{{$_['title']}}</h5>
              <form method="post" action="{{route('download-magazine')}}">
                @csrf
                <input type="hidden" name="url" value="{{$_['url']}}">
                <button class="btn btn-sm bg-success-soft">
                  <i class="bi bi-download me-1"></i> Download Magazine
                </button>
              </form>
            </footer>
          </div>
        </article>
      @endforeach
    </section>

  </section>
@endsection

