@extends('publications.layout')

@section('title', 'Publication - Articles')

@section('publication_content')
  @php
    $post = $posts->latest()->paginate($paginate_per_page)->fragment('article');
  @endphp

  {{--  <header class="mb-5">--}}
  {{--    <h2 class="text-gray-600">Articles</h2>--}}
  {{--  </header>--}}

  <section class="row" style="row-gap: 50px">
    @foreach($post as $_)
      <article class="col-xl-4 col-lg-4 col-md-6 col-12">
        <!-- Card -->
        <div class="card mb-4 shadow-lg h-100">
          <a href="{{route('full-article', ["article"=> $_->slug, "id" => $_->id])}}"
             class="card-img-top stretched-link pt-2 px-2">
            <img src="{{$_->thumbnail}}" class="card-img-top rounded-top-md" style="height: 250px; object-fit: cover"
                 alt="">
          </a>
          <!-- Card body -->
          <div class="card-body d-flex flex-column">
            <a href="#" style="width: max-content"
               class="fs-6 fw-semi-bold d-inline-block mb-3 badge bg-{{$color_tag}}-soft">{{$_->b_category->name}}</a>
            <h5>
              <a href="{{route('full-article', ["article"=> $_->slug, "id" => $_->id])}}" class="text-inherit">
                {{Str::camel($_->title)}}
              </a>
            </h5>
            <p class="lh-3">{!! nl2br($_->excerpt()) !!}</p>
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
              <div class="col-auto">
                <p class="fs-6 mb-0">{{$_->readTime()}}</p>
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
@endsection
