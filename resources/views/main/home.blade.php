@extends('layout.master')

@section('title', 'Home')

@section('style')
  @parent
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@php
  $post = $posts->take(3)->inRandomOrder()->latest()->get();
@endphp


@section('body')
  @include('main.partials.navbar')

  {{--  Home--}}
  <section class="pt-3 pb-8" id="home-jumbotron">
    <div class="container-lg px-3 px-xxl-12">
      <div class="row justify-content-between">
        <div class="col-md-6 flex-grow-1" style="flex-basis: 637px">
          <small id="tagline">
            #1 Trusted Expertise, Unmatched Excellence.
          </small>
          <h2 class="bt text-white">
            Innovating Solutions, Empowering Growth,
            Shaping Tomorrow.
          </h2>
          <p class="text-white">
            Welcome to Metalex Group, the powerhouse behind trailblazing companies across technology, law, education,
            publishing, and entertainment.
          </p>
          <a href="#subsidiary-section" class="btn text-white mb-3">
            Explore Our Group
          </a>
          <div>
            <img src="{{asset('assets/images/svg/star-group.svg')}}" alt="">
            <span class="text-white tt">Trusted by many!</span>
          </div>
        </div>
        <div class="col d-none d-xl-block">
          <img src="{{asset('assets/images/background/home/jumbotron.svg')}}" class="float-end" alt="">
        </div>
      </div>
    </div>
  </section>

  {{--  Info Metrics--}}
  <section id="record" class="px-3">
    <div class="d-flex justify-content-md-center justify-content-between text-center gap-4">
      <div class="col-md-3 no text-center">
        <h3>{{$posts->count()}}</h3>
        <small>Publications</small>
      </div>
      <div class="col-md-3 no text-center">
        <h3>10K</h3>
        <small>LinkedIn Impressions</small>
      </div>
      <div class="col-md-3 no text-center">
        <h3>500+</h3>
        <small>Happy Clients</small>
      </div>
    </div>
  </section>

  {{--  About--}}
  <section id="about-section" class="py-10">
    <h2 class="text-center title">
      <span>About</span>
      <span class="color">Us</span>
    </h2>

    <div class="col-lg-9 mx-auto">
      <div class="row flex-lg-nowrap flex-lg-row flex-column-reverse px-3">
        <div class="col-lg-6" id="section-1">
          <h3>Who We Are</h3>
          <p>
            Metalex Group Limited is a management and consultancy company leading a diverse portfolio of subsidiaries:
            Metalex Technologies, Metalex Academy, Metalex Publications, Metalex Entertainment Hub, and Metalex Legal.
            Together, these subsidiaries deliver innovative services across multiple industries, offering unparalleled
            solutions to businesses and individuals alike.
          </p>

          <p>
            <strong>Our mission:</strong> To innovate, inspire, and lead by empowering each subsidiary to excel in its
            field while
            fostering collaboration across the group.
          </p>

          <p>
            <strong>Our Vision:</strong> To be the benchmark of integrated excellence in Africa and beyond.
          </p>

          <p>
            At Metalex Group, we are redefining the boundaries of possibility, bridging industries, and empowering
            communities with every step forward.
          </p>

          <button class="btn text-white mt-2" id="learn-more">Learn More</button>
        </div>
        <div class="col position-relative" id="section-2">
          <img src="{{asset('assets/images/background/home/about-section.svg')}}" alt="">
          <div class="box">
            <p class="mb-0">Metalex</p>
            <span>Group</span>
          </div>
        </div>
      </div>
    </div>

  </section>

  {{--  Subsidiaries--}}
  @include('main.page.home.subsidiary')

  {{--  News & Updates--}}
  <section id="news-updates" class="py-7">
    <h2 class="text-center title">
      <span class="color">News </span>
      <span>& Updates</span>
    </h2>

    <div class="container px-0">
      <div id="body" class="py-7 px-md-7 px-3">
        <header>
          <p class="text-dark mb-0">Featured News & Updates <i class="bi bi-dash-lg text-dark"></i></p>
          <a href="{{route('p.articles')}}">See All News <i class="bi bi-chevron-right"></i></a>
        </header>

        {{--This displays the news and updates--}}
        @include('main.components.news-updates')
      </div>
    </div>
  </section>

  {{--  Testimonials--}}
  <section id="testimonials" class="py-7 d-none">
    <h2 class="text-center title">
      <span>What Our</span>
      <span class="color">Customers Say </span>
    </h2>

    <div class="d-flex">
      <div class="carousel-track">
        @for($i =0; $i < 4; $i++)
          <div class="testimonial">
            <!-- Card -->
            <div class="card mb-4 shadow-lg">
              <!-- Card body -->
              <div class="card-body px-0 pb-0 d-flex flex-column">
                <div>
                  <div class="px-5 text-dark">
                    <header>
                      <i class="fa-solid fa-quote-left" style="font-size: 32px"></i>
                    </header>

                    <p class="mb-0 py-3" style="font-size: 1em">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, temporibus.
                    </p>
                  </div>

                  <footer class="mt-auto text-center pb-7">
                    <div class="position-relative z-1" style="top: 20px">
                      <img src="../../assets/images/avatar/avatar-12.jpg"
                           class="rounded-circle avatar-xl" alt="">
                      <p class="mb-0 mt-3">Ejiro</p>
                    </div>
                  </footer>
                </div>
              </div>
            </div>
          </div>
        @endfor
      </div>
      <div class="carousel-track">
        @for($i =0; $i < 4; $i++)
          <div class="testimonial">
            <!-- Card -->
            <div class="card mb-4 shadow-lg">
              <!-- Card body -->
              <div class="card-body px-0 pb-0 d-flex flex-column">
                <div>
                  <div class="px-5 text-dark">
                    <header>
                      <i class="fa-solid fa-quote-left" style="font-size: 32px"></i>
                    </header>

                    <p class="mb-0 py-3" style="font-size: 1em">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, temporibus.
                    </p>
                  </div>

                  <footer class="mt-auto text-center pb-7">
                    <div class="position-relative z-1" style="top: 20px">
                      <img src="../../assets/images/avatar/avatar-12.jpg"
                           class="rounded-circle avatar-xl" alt="">
                      <p class="mb-0 mt-3">Ejiro</p>
                    </div>
                  </footer>
                </div>
              </div>
            </div>
          </div>
        @endfor
      </div>
    </div>
  </section>

  {{--  Contact--}}
  <section id="contact-us" class="py-7">
    <h2 class="text-center title">
      <span class="color">Contact</span>
      <span>Us</span>
    </h2>

    <div class="col-lg-9 mx-auto py-5 px-3" id="body">
      @include('main.page.home.contact-form')
    </div>
  </section>

  {{--  Info Metrics--}}
  <section id="before-footer" class="mt-5">
    @include('main.contact-info-footer')
  </section>

  @include('main.partials.footer')
@endsection

<!-- Scripts -->
@section('scripts')
  @parent
  <script>
    document.querySelectorAll('#subsidiary-section .left .item').forEach(function (elem) {
      elem.addEventListener('mouseover', function (e) {
        // * Animate the scrollbar
        document.querySelector('.scrollbar span').style.transform = `translateY(${e.currentTarget.offsetTop}px)`;

        const id = elem.getAttribute('data-bs-target');

        document.querySelectorAll('#subsidiary-section .left .item, .tab-pane').forEach(function (item) {
          item.classList.remove('active', 'show')
        })

        e.currentTarget.classList.add('active')
        document.querySelector(`${id}`).classList.add('active', 'show')
      })
    })
  </script>
@endsection
