@extends('publications.layout')

@section('title', 'Publication - Magazines')

@section('publication_content')
  <header class="mb-5">
    <h4 class="text-gray-600">Magazines</h4>
  </header>

  <section class="row">
    @foreach($magazines as $_)
      <article class="col-lg-4 col-md-6 col-12">
        <!-- Card -->
        <div class="card  mb-4 card-hover">
          <a href="#" class="bg-gradient-mix-shade card-img-top">
            <img src="{{Storage::url('magazine_thumbnails/'. $_['image'])}}" alt=""
                 class="card-img-top rounded-md"
                 style="height: 400px; object-fit: cover; transform: scale(.98); object-position: 0 -2px">
          </a>

          <!-- Card footer -->
          <footer class="card-footer">
            <h5 class="text-primary">{{$_['label']}}</h5>
            <h5 class="lh-3 fs-6">{{$_['title']}}</h5>
            @if($_['external'] == 'true')
              <a href="{{$_['url']}}" target="_blank" class="btn btn-sm bg-info-soft">
                <i class="bi bi-eye me-1"></i> View Magazine
              </a>
            @else
              <form method="post" action="{{route('download-magazine')}}">
                @csrf
                <input type="hidden" name="url" value="{{$_['url']}}">
                <button class="btn btn-sm bg-success-soft">
                  <i class="bi bi-download me-1"></i> Download Magazine
                </button>
              </form>
            @endif

          </footer>
        </div>
      </article>
    @endforeach
  </section>
@endsection
