@extends('layout.master')

@section('title', 'Metalex Publications')

@section('style')
  @parent
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@section('body')
  @include('main.partials.navbar')

  {{--  Jumbotron --}}
  <section class="pt-3 pb-8" id="publication-jumbotron">
    <div class="col-lg-9 px-3 mx-auto text-center">
      <h2 class="text-white" id="heading">Metalex Publications Ltd</h2>
      <p class="text-white pt-4 pb-7 px-xl-15">
        At Metalex Publications, we transform ideas into impactful publications. From legal insights to academic
        resources and creative works, we’re your trusted partner for high-quality content that informs, educates, and
        inspires across industries.
      </p>
      <a href="{{route('p.articles')}}" class="btn text-white">Explore Our Publications</a>
    </div>
  </section>

  {{-- About --}}
  <section class="py-10" id="publication-about">
    <div class="col-lg-10 px-3 mx-auto">
      <div class="row flex-lg-nowrap flex-column-reverse flex-lg-row justify-content-between" style="column-gap: 2em">
        <div class="col-lg-6" id="section-1">
          <article class="mb-5">
            <h2 class="title mb-3 d-none d-lg-block">
              <span class="color">About</span>
              <span>Metalex Publications</span>
            </h2>

            <p>
              At Metalex Publications, we lead the way in creating and delivering exceptional content across various
              domains. Our expertise spans legal, academic, and general publishing, making us a trusted resource for
              individuals, businesses, and organizations.
              With a strong commitment to quality, innovation, and relevance, we aim to produce publications that not
              only educate but also empower and inspire our readers. Whether you're a legal professional seeking
              insightful resources, a business looking for custom publishing solutions, or a reader exploring engaging
              content, Metalex Publications has you covered.
            </p>

            <p>
              <span class="lead">Our Mission</span>
              To provide high-quality publications and tailored publishing solutions for diverse audiences.
            </p>

            <p>
              <span class="lead">Our Vision</span>
              To lead in creating impactful content that educates, empowers, and inspires.
            </p>

          </article>
        </div>
        <div class="col-lg-6" id="section-2">
          <figure>
            <h2 class="title mb-3 d-block d-lg-none">
              <span class="color">About</span>
              <span>Metalex Publications</span>
            </h2>
            <img src="{{asset('assets/images/background/subsidiaries/m-pub-s1.svg')}}" class="d-block mx-auto img-fluid" alt="">
          </figure>
        </div>
      </div>
    </div>
  </section>

  {{-- Categories--}}
  <section class="py-10" id="publication-categories">
    <div class="col-lg-10 px-3 mx-auto">
      <header class="text-center mb-7">
        <h2 class="title mb-2">
          <span>Our</span>
          <span class="color">Publications</span>
        </h2>
        <p>
          Explore our diverse range of publications crafted to meet the highest standards of quality and relevance:
        </p>
      </header>

      <div class="d-flex flex-wrap justify-content-between justify-content-md-center"
           style="row-gap: 4em; column-gap: 2.5em">

        {{--  Lega Content--}}
        <div class="col-md-4 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <figure>
                <img src="{{asset('assets/images/background/subsidiaries/m-pub-c1.svg')}}" alt="">
              </figure>
              <h3>Legal Publications</h3>
              <p>
                Books, journals, and resources tailored for legal practitioners, students, and scholars.
              </p>
            </div>
          </div>
        </div>

        {{--  Magazines--}}
        <div class="col-md-4 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <figure>
                <img src="{{asset('assets/images/background/subsidiaries/m-pub-c2.svg')}}" alt="">
              </figure>
              <h3>Magazines</h3>
              <p>
                Dive into current trends in law, technology, business, and entertainment with our expertly curated
                magazine series.
              </p>
            </div>
          </div>
        </div>

        {{--  General Publications--}}
        <div class="col-md-4 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <figure>
                <img src="{{asset('assets/images/background/subsidiaries/m-pub-c3.svg')}}" alt="">
              </figure>
              <h3>General and Custom Publications</h3>
              <p>
                Unique content for businesses, organizations, and individuals, tailored to specific needs and
                objectives.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{--  Our Services --}}
  <section class="py-10" id="publication-services">
    <div class="col-lg-10 px-5 mx-auto">
      <div class="row flex-lg-nowrap gap-3 flex-column-reverse flex-lg-row-reverse">
        <div class="col-lg-6" id="section-1">
          <article class="mb-5">
            <h2 class="title mb-5 d-none d-lg-block">
              <span>Our</span>
              <span class="color">Services</span>
            </h2>
            <p>
              Explore a wide range of professional publishing solutions designed to meet your unique needs, from concept
              development to final distribution.
            </p>
            <p>
              <span class="lead">Editorial and Design Excellence</span>
              Comprehensive editorial support and creative design services to refine and present your ideas with
              precision and style.
            </p>

            <p>
              <span class="lead">Custom Publishing Solutions</span>
              Tailored publishing options for authors, businesses, and organizations, offering a seamless experience
              from concept to final product.
            </p>

            <p>
              <span class="lead">Print and Digital Distribution</span>
              Expand your reach with our integrated publishing solutions, including traditional print formats and
              innovative digital platforms.
            </p>

          </article>
        </div>
        <div class="col-lg-6" id="section-2">
          <figure>
            <h2 class="title mb-3 d-block d-lg-none">
              <span>Our</span>
              <span class="color">Services</span>
            </h2>
            <img src="{{asset('assets/images/background/subsidiaries/m-pub-services.svg')}}" class="d-block mx-auto img-fluid"
                 alt="">
          </figure>
        </div>
      </div>
    </div>
  </section>

  {{--  Additional Info--}}
  <section id="before-footer" class="py-10"
           style="background: url({{asset('assets/images/background/home/before-footer-green.svg')}})">
    <div id="publication-join-us" class="text-center px-3 col-lg-7 mx-auto">
      <h3 class="mb-3">Start Your Publishing Journey</h3>
      <p class="text-dark d-none d-md-block">
        Transform your concepts into impactful publications with our expert solutions. From legal resources to creative
        projects, we help you succeed.
      </p>
      <a href="#" class="btn text-white w-100 w-sm-auto mt-3">Bring Your Ideas To Life</a>
    </div>
  </section>

  @include('main.partials.footer')
@endsection

