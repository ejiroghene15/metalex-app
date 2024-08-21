@extends('layout.master')

@section('title', 'Publication - Articles')

@php
  $related_posts = $post->b_category->blog_post->where('id', '!=', $post->id);
@endphp

@section('body')
  @include('partials.navbar')
  <main class="mb-5 pb-5">
    <section class="py-4 py-lg-8 pb-md-14">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-8 col-md-12 col-12 mb-2">
            <header class="text-center mb-4">
              <a
                href="{{route('single-category', ["category"=> $post->b_category->slug, "id" => $post->b_category->id])}}"
                class="fs-5 fw-semi-bold d-inline-block px-4 py-2 mb-4 badge bg-{{$color_tag}}-soft">{{$post->b_category->name}}</a>
              <h1 class="display-6 fw-bold mb-4">{{$post->title}}</h1>
            </header>
            <section class="d-flex justify-content-sm-between justify-content-center flex-wrap mb-3">
              <!-- Media -->
              <div class="d-flex justify-content-center align-items-center">
                <img src="{{$post->author->avatar}}" alt="" class="rounded-circle avatar-sm me-1">
                <h5 class="mb-0">{{$post->author->fullName()}}</h5>
                <span class="mx-1">|</span>
                <small class="fw-semi-bold">{{$post->created_at}}</small cl>
              </div>

              <div>
                <a href="{{$facebook_share_link}}" target="_blank" class="ms-2 text-muted"><i class="mdi mdi-facebook fs-3"></i></a>
                <a href="{{$twitter_share_link}}" target="_blank" class="ms-2 text-muted"><i class="mdi mdi-twitter fs-3"></i></a>
                <a href="{{$whatsapp_share_link}}" target="_blank" class="ms-2 text-muted"><i class="mdi mdi-whatsapp fs-3"></i></a>
                <a href="{{$linkedin_share_link}}" target="_blank" class="ms-2 text-muted "><i class="mdi mdi-linkedin fs-3"></i></a>
              </div>

            </section>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-8 col-md-12 col-12 mb-2">
            <article>
              <!-- Image -->
              <figure>
                <img src="{{$post->thumbnail}}" alt="" class="img-fluid rounded-3 w-100"
                     style="height:60vmin; object-fit: cover">
              </figure>

              <!-- Descriptions -->
              <div style="line-height: 2.5em;">{!! $post->body !!}</div>

              {{-- Only the user who created the post can edit it--}}
              @can('updateBlog', $post)
                <div class="d-flex justify-content-center mb-n1">
                  <a href="{{route('user.blog.edit', $post)}}" class="btn btn-{{$color_tag}}">
                    <i class="fe fe-edit me-2"></i>Edit Post
                  </a>
                </div>
              @endcan

              <hr class="my-4">

              <footer class="d-flex justify-content-between align-items-sm-center align-items-start mb-5 gap-2">
                <div class="d-flex">
                  <img src="{{$post->author->avatar}}" alt="" class="rounded-circle avatar-sm">
                  <div class="ms-2 lh-1">
                    <h5 class="mb-1">{{$post->author->fullName()}}</h5>
                    <span class="badge bg-{{$color_tag}}-soft">Author</span>
                  </div>
                </div>

                @auth
                  <form class="d-inline bookmark" method="post">
                    @csrf
                    <button class="btn btn-sm bg-dark-{{$color_tag}}-soft">
                      @if($user->bookmarks()->where([['content_id', $post->id], ['type', 'blog']])->count())
                        <i class="bi bi-bookmark-fill icon me-1"></i>
                        <span class="label" for="remove">Remove Bookmark</span>
                      @else
                        <i class="bi bi-bookmark icon me-1"></i>
                        <span class="label" for="add">Bookmark</span>
                      @endif
                    </button>
                    <input type="hidden" name="id" value="{{base64_encode($post->id)}}">
                  </form>
                @endauth

              </footer>
            </article>
            @guest
              <!-- Subscribe to Newsletter -->
              <section class="py-12" id="newsletter">
                <div class="text-center mb-6">
                  <h2 class="display-4 fw-bold">Sign up for our Newsletter</h2>
                  <p class="mb-0 lead">Join our newsletter and get resources, curated content, and design inspiration
                    delivered straight to your inbox.</p>
                </div>
                <!-- Form -->
                <form class="row px-md-20">
                  <div class="mb-3 col ps-0 ms-2 ms-md-0">
                    <input type="email" class="form-control" placeholder="Email Address" required>
                  </div>
                  <div class="mb-3 col-auto ps-0">
                    <button class="btn btn-primary" type="submit">Submit</button>
                  </div>
                </form>
              </section>
            @endguest
          </div>
        </div>
      </div>

      {{-- Get posts that belong to the same category--}}
      @if($related_posts->count())
        <!-- Container -->
        <div class="container mt-10">
          <header class="my-5">
            <h2>Related Post</h2>
          </header>
          <div class="row" style="row-gap: 50px">
            @foreach($related_posts as $_)
              <article class="col-xl-4 col-lg-4 col-md-6 col-12">
                <!-- Card -->
                <div class="card mb-4 shadow-lg h-100">
                  <a href="{{route('full-article', ["article"=> $_->slug, "id" => $_->id])}}"
                     class="card-img-top stretched-link pt-2 px-2">
                    <img src="{{$_->thumbnail}}" class="card-img-top rounded-top-md"
                         style="height: 250px; object-fit: cover" alt="">
                  </a>
                  <!-- Card body -->
                  <div class="card-body d-flex flex-column">
                    <a href="#" style="width: max-content"
                       class="fs-6 fw-semi-bold d-inline-block mb-3 badge bg-secondary-soft">{{$_->b_category->name}}</a>
                    <h4>
                      <a href="{{route('full-article', ["article"=> $_->slug, "id" => $_->id])}}" class="text-primary">
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
                        <p class="fs-6 mb-0 text-primary">{{$_->created_at}}</p>
                      </div>

                    </div>
                  </div>
                </div>
              </article>
            @endforeach
          </div>
        </div>
      @endif
    </section>
  </main>
  @include('partials.footer')
@endsection

@auth
  @section('scripts')
    @parent
    <script>
      // * Bookmark a Post
      $(".bookmark").on("submit", function (e) {
        e.preventDefault();
        let btn_elem = $(this).children("button");
        let action = btn_elem.find('.label').attr('for');

        let data = $(this).serializeArray();
        $.post(`{{env('APP_URL')}}/publication/article/${action === 'add' ? 'add-bookmark' : 'remove-bookmark'}`, data, function (response) {
          if (response?.status === 'success') {
            switch (action) {
              case 'add':
                btn_elem.find('.label').text("Remove Bookmark").attr("for", "remove");
                btn_elem.find(".icon").removeClass("bi-bookmark").addClass("bi-bookmark-fill");
                break;
              case 'remove':
                btn_elem.find('.label').text("Bookmark").attr("for", "add");
                btn_elem.find(".icon").removeClass("bi-bookmark-fill").addClass("bi-bookmark");
                break;
            }
          }
        })
      })
    </script>
  @endsection
@endauth