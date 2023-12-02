@extends('publications.layout')

@section('title', 'Publication - Magazines')

@php
  $magazines = [
    [
        'image' => 'assets/images/magazine/cover.jpg',
        'label' => 'Vo1 1, Issue 1',
        'title' => 'The New Age Practice of Law',
        'file' =>  "https://res.cloudinary.com/jiroghene/image/upload/v1687428050/metalex/magazine/Metalex_Legal_Magazine_Issue_1_aapcvn.pdf"
    ]
  ];
@endphp

@section('publication_content')
  <header class="mb-5">
    <h4 class="text-gray-600">Magazines</h4>
  </header>

  <section class="row">
    @foreach($magazines as $_)
      <article class="col-lg-3 col-md-6 col-12">
        <!-- Card -->
        <div class="card  mb-4 card-hover">
          <a href="#" class="bg-gradient-mix-shade card-img-top">
            <img src="{{asset($_['image'])}}" alt="" class="card-img-top rounded-top-md">
          </a>

          <!-- Card footer -->
          <footer class="card-footer">
            <h5 class="text-primary">{{$_['label']}}</h5>
            <h4>{{$_['title']}}</h4>
            <form method="post" action="{{route('download-magazine')}}">
              @csrf
              <input type="hidden" name="url" value="{{$_['file']}}">
              <button class="btn btn-sm bg-success-soft">
                <i class="bi bi-download me-1"></i> Download Magazine
              </button>
            </form>
          </footer>
        </div>
      </article>
    @endforeach
  </section>
@endsection
