@extends('layout.master')

@section('title', 'Metalex legals')

@section('style')
  @parent
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@section('body')
  @include('main.partials.navbar')

  {{--  Jumbotron --}}
  <section class="pt-3 pb-8" id="legal-jumbotron">
    <div class="col-lg-9 mx-auto text-center">
      <h2 class="text-white" id="heading">Metalex Legal LP</h2>
      <p class="text-white pt-4 pb-7 px-xl-15">
        At Metalex Legal, we simplify complex legal matters for businesses and individuals through expertise in
        corporate, intellectual property, and technology law.
      </p>
      <a href="" class="btn text-white">Contact Our Legal Team</a>
    </div>
  </section>

  {{-- About --}}
  <section class="py-10" id="legal-about">
    <div class="col-lg-10 px-3 mx-auto">
      <div class="row flex-lg-nowrap flex-column-reverse flex-lg-row justify-content-between" style="column-gap: 2em">
        <div class="col-lg-6" id="section-1">
          <article class="mb-5">
            <h2 class="title mb-3 d-none d-lg-block">
              <span class="color">About</span>
              <span>Metalex Legal</span>
            </h2>
            <p>
              Metalex Legal is a modern law firm dedicated to providing innovative and practical legal solutions. We
              specialize in corporate law, intellectual property, technology law, and human rights advocacy. Whether you
              are a business navigating complex regulations or an individual seeking legal guidance, our expert team is
              here to help.
            </p>

            <p>
              <span class="lead">Our Vision</span>
              To be a leading law firm delivering innovative and practical legal solutions that empower businesses and
              individuals to thrive in a complex world.
            </p>

            <p>
              <span class="lead">Our Mission</span>
              To provide exceptional legal services with a focus on expertise, professionalism, and personalized client
              care while championing justice and innovation.
            </p>

          </article>
        </div>
        <div class="col-lg-6" id="section-2">
          <figure>
            <h2 class="title mb-3 d-block d-lg-none">
              <span class="color">About</span>
              <span>Metalex Legal</span>
            </h2>
            <img src="{{asset('assets/images/background/subsidiaries/m-legal-s1.svg')}}" class="d-block mx-auto" alt="">
          </figure>
        </div>
      </div>
    </div>
  </section>

  {{-- Practice Areas--}}
  <section class="py-10" id="legal-practice-areas">
    <div class="col-lg-10 px-3 mx-auto">
      <header class="text-center mb-7">
        <h2 class="title mb-2">
          <span class="color">Practice</span>
          <span>Areas</span>
        </h2>
        <p>
          Explore our diverse range of legal expertise designed to address complex challenges and provide tailored
          solutions for businesses and individuals.
        </p>
      </header>

      <div class="d-flex flex-wrap justify-content-between justify-content-md-center"
           style="row-gap: 4em; column-gap: 2.5em">

        {{--  Corporate & Business Law--}}
        <div class="col-md-3 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <figure>
                <img src="{{asset('assets/images/background/subsidiaries/icons/corporate-law.svg')}}" alt="">
              </figure>
              <h3>Corporate and Business Law</h3>
              <p>
                Strategic legal support for business formation, operations, and compliance.
              </p>
            </div>
          </div>
        </div>

        {{--  Intellectual Property Protection--}}
        <div class="col-md-3 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <figure>
                <img src="{{asset('assets/images/background/subsidiaries/icons/int-prop-law.svg')}}" alt="">
              </figure>
              <h3>Intellectual Property Protection</h3>
              <p>
                Safeguarding your creative and intellectual assets with robust enforcement.
              </p>
            </div>
          </div>
        </div>

        {{--  Technology & Cybersecurity Law--}}
        <div class="col-md-3 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <figure>
                <img src="{{asset('assets/images/background/subsidiaries/icons/cyber-sec.svg')}}" alt="">
              </figure>
              <h3>Technology and Cybersecurity Law</h3>
              <p>
                Legal guidance on data privacy, cybersecurity, and emerging tech regulations.
              </p>
            </div>
          </div>
        </div>

        {{--  Human Rights--}}
        <div class="col-md-3 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <figure>
                <img src="{{asset('assets/images/background/subsidiaries/icons/human-right.svg')}}" alt="">
              </figure>
              <h3>Human Rights and Public Policy Advocacy</h3>
              <p>
                Championing rights and driving policy reforms for a better society.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{--  Client Focus --}}
  <section class="py-10" id="legal-client-focus">
    <div class="col-lg-10 px-3 mx-auto">
      <div class="row flex-lg-nowrap gap-3 flex-column-reverse flex-lg-row-reverse align-items-center">
        <div class="col-lg-6" id="section-1">
          <article class="mb-5">
            <h2 class="title mb-5 d-none d-lg-block">
              <span class="color">Client</span>
              <span>Focus</span>
            </h2>
            <p>
              We prioritize delivering personalized, professional, and innovative legal solutions tailored to meet each
              client’s unique needs. By understanding your goals and challenges, we craft strategies that ensure the
              best outcomes, combining legal expertise with a commitment to excellence and client satisfaction.
            </p>

          </article>
        </div>
        <div class="col-lg-6" id="section-2">
          <figure>
            <h2 class="title mb-3 d-block d-lg-none">
              <span class="color">Client</span>
              <span>Focus</span>
            </h2>
            <img src="{{asset('assets/images/background/subsidiaries/m-legal-2.svg')}}" class="d-block mx-auto"
                 alt="">
          </figure>
        </div>
      </div>
    </div>
  </section>

  {{--  Additional Info--}}
  <section id="before-footer" class="py-10"
           style="background: url({{asset('assets/images/background/home/before-footer-teal.svg')}})">
    <div id="legal-join-us" class="text-center px-3 col-lg-7 mx-auto">
      <h3 class="mb-3">Your Trusted Legal Partner</h3>
      <p class="text-dark d-none d-md-block">
        Let Metalex Legal guide you through today’s complex legal landscape with tailored solutions that protect and
        empower.
      </p>
      <a href="#" class="btn text-white w-100 w-sm-auto mt-3">Contact Our Legal Team</a>
    </div>
  </section>

  @include('main.partials.footer')
@endsection

