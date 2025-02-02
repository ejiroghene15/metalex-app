@extends('layout.master')

@section('title', 'Metalex Entertainment Hub')

@section('style')
  @parent
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@section('body')
  @include('main.partials.navbar')

  {{--  Jumbotron --}}
  <section class="pt-3 pb-8" id="ehub-jumbotron">
    <div class="col-lg-9 mx-auto text-center">
      <h2 class="text-white" id="heading">Metalex Entertainment Hub Ltd</h2>
      <p class="text-white pt-4 pb-7 px-xl-15">
        At Metalex Entertainment Hub, we redefine entertainment by nurturing artists, producing captivating content, and
        driving innovation in the creative arts.
      </p>
      <a href="" class="btn text-white">Get In Touch</a>
    </div>
  </section>

  {{-- About --}}
  <section class="py-10" id="ehub-about">
    <div class="col-lg-10 px-3 mx-auto">
      <div class="row flex-lg-nowrap flex-column-reverse flex-lg-row justify-content-between" style="column-gap: 2em">
        <div class="col-lg-6" id="section-1">
          <article class="mb-5">
            <h2 class="title mb-3 d-none d-lg-block">
              <span class="color">About</span>
              <span>Metalex Entertainment Hub</span>
            </h2>

            <p>
              At Metalex Entertainment Hub, we are passionate about redefining the boundaries of creativity and
              entertainment. From artist management to content production, our mission is to empower creatives and
              deliver exceptional experiences that resonate with audiences.
            </p>

            <p class="mt-5">
              We pride ourselves on fostering an environment where artistic vision thrives. By combining expertise in
              production, promotion, and consultancy, we help talents and organizations excel in the competitive
              entertainment landscape.
              Whether you’re an artist seeking growth, a filmmaker in need of a production partner, or a brand looking
              to host unforgettable events, Metalex Entertainment Hub is your trusted ally in the creative industry.
            </p>

          </article>
        </div>
        <div class="col-lg-6" id="section-2">
          <figure>
            <h2 class="title mb-3 d-block d-lg-none">
              <span class="color">About</span>
              <span>Metalelex Entertainment Hub</span>
            </h2>
            <img src="{{asset('assets/images/background/subsidiaries/m-ehub-s1.svg')}}" class="d-block mx-auto" alt="">
          </figure>
        </div>
      </div>
    </div>
  </section>

  {{-- Services--}}
  <section class="py-10" id="ehub-services">
    <div class="col-lg-10 px-3 mx-auto">
      <header class="text-center mb-7">
        <h2 class="title mb-2">
          <span>Our</span>
          <span class="color">Services</span>
        </h2>
        <p>
          Explore our diverse range of publications crafted to meet the highest standards of quality and relevance:
        </p>
      </header>

      <div class="d-flex flex-wrap justify-content-between justify-content-md-center"
           style="row-gap: 4em; column-gap: 2.5em">

        {{--  Artist Management & Development--}}
        <div class="col-md-3 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <figure>
                <img src="{{asset('assets/images/background/subsidiaries/icons/artist.svg')}}" alt="">
              </figure>
              <h3>Artist Management and Development</h3>
              <p>
                We help artists grow their careers through skill building and brand development.
              </p>
            </div>
          </div>
        </div>

        {{--  Music Production--}}
        <div class="col-md-3 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <figure>
                <img src="{{asset('assets/images/background/subsidiaries/icons/music.svg')}}" alt="">
              </figure>
              <h3>Music Production, Promotion, and Distribution</h3>
              <p>
                We produce, promote, and distribute music to reach a global audience.
              </p>
            </div>
          </div>
        </div>

        {{--  Film & Video Production--}}
        <div class="col-md-3 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <figure>
                <img src="{{asset('assets/images/background/subsidiaries/icons/video.svg')}}" alt="">
              </figure>
              <h3>Film and Video Production</h3>
              <p>
                We create impactful films and videos that captivate viewers.
              </p>
            </div>
          </div>
        </div>

        {{--  Event Plannning--}}
        <div class="col-md-3 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <figure>
                <img src="{{asset('assets/images/background/subsidiaries/icons/calendar.svg')}}" alt="">
              </figure>
              <h3>Event Planning and Creative Consultancy</h3>
              <p>We plan exceptional events and provide innovative creative strategies.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  {{--  Why Choose Us --}}
  <section class="py-10" id="ehub-why-choose-us">
    <div class="col-lg-10 px-5 mx-auto">
      <div class="row flex-lg-nowrap gap-3 flex-column-reverse flex-lg-row-reverse align-items-center">
        <div class="col-lg-6" id="section-1">
          <article class="mb-5">
            <h2 class="title mb-5 d-none d-lg-block">
              <span class="color">Why</span>
              <span>Choose Us?</span>
            </h2>

            <p>
              <span class="lead">Artist-Centered Approach </span>
              We prioritize artist growth, creative freedom, and unique expression, ensuring every talent we work with
              reaches their full potential.
            </p>

            <p>
              <span class="lead">Proven Industry Experience</span>
              With a track record of success across music, film, and event production, we have the expertise to deliver
              excellence.
            </p>

            <p>
              <span class="lead">Comprehensive Solutions</span>
              From concept to execution, we provide end-to-end services tailored to meet your specific needs.
            </p>

            <p>
              <span class="lead">Innovation and Collaboration</span>
              Our team embraces fresh ideas and collaborates closely with clients to create groundbreaking projects that
              stand out.
            </p>


          </article>
        </div>
        <div class="col-lg-6" id="section-2">
          <figure>
            <h2 class="title mb-3 d-block d-lg-none">
              <span class="color">Why</span>
              <span>Choose Us?</span>
            </h2>
            <img src="{{asset('assets/images/background/subsidiaries/m-ehub-services.svg')}}" class="d-block mx-auto"
                 alt="">
          </figure>
        </div>
      </div>
    </div>
  </section>

  {{--  Additional Info--}}
  <section id="before-footer" class="py-10"
           style="background: url({{asset('assets/images/background/home/before-footer-yellow.svg')}})">
    <div id="ehub-join-us" class="text-center px-3 col-lg-7 mx-auto">
      <h3 class="mb-3">Create. Innovate. Inspire.</h3>
      <p class="text-dark d-none d-md-block">
        Partner with Metalex Entertainment Hub to turn your creative visions into reality. Whether you're an artist,
        producer, or brand, we help you shine in the entertainment world.
      </p>
      <a href="#" class="btn text-white w-100 w-sm-auto mt-3">Get In Touch With Us</a>
    </div>
  </section>

  @include('main.partials.footer')
@endsection
