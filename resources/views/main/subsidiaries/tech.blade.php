@extends('layout.master')

@section('title', 'Metalex Technologies')

@section('style')
  @parent
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@section('body')
  @include('main.partials.navbar')

  {{--  Jumbotron --}}
  <section class="pt-3 pb-8" id="tech-jumbotron">
    <div class="col-lg-9 mx-auto text-center">
      <h2 class="text-white" id="heading">Metalex Technologies Ltd</h2>
      <p class="text-white pt-4 pb-7 px-xl-15">
        Empowering businesses with cutting-edge technology solutions. At Metalex Technologies, we transform ideas into
        innovative digital experiences, driving growth and success for our clients worldwide.
      </p>
      <button class="btn text-white">Talk to our experts</button>
    </div>
  </section>

  {{-- About --}}
  <section class="py-10" id="tech-about">
    <div class="col-lg-10 px-3 mx-auto">
      <div class="row flex-lg-nowrap flex-column-reverse flex-lg-row justify-content-between" style="column-gap: 3em">
        <div class="col-lg-6" id="section-1">
          <article class="mb-5">
            <h2 class="title mb-3 d-none d-lg-block">
              <span class="color">About</span>
              <span>Metalex Technologies</span>
            </h2>

            <p>
              At Metalex Group, we believe in empowering individuals to achieve their professional best while
              contributing to innovative solutions across industries. Our subsidiaries offer diverse opportunities to
              make an impact in a dynamic and innovative environment.
            </p>

            <p>
              <span class="lead">Our Mission</span>
              To empower businesses and individuals with cutting-edge technology solutions that drive efficiency,
              innovation, and sustainable growth.
            </p>

            <p>
              <span class="lead">Our Vision</span>
              To be the leading technology partner, delivering transformative digital solutions that redefine industries
              and enable success.
            </p>

            <p>
              <span class="lead">Our Core Values</span>
              At Metalex Technologies, we are driven by innovation, excellence, and integrity. We prioritize our
              clients' success, foster collaboration across teams, and deliver forward-thinking solutions that meet the
              highest standards of quality and ethics.
            </p>
          </article>
        </div>
        <div class="col-lg-6" id="section-2">
          <figure>
            <h2 class="title mb-3 d-block d-lg-none">
              <span class="color">About</span>
              <span>Metalex Technologies</span>
            </h2>
            <img src="{{asset('assets/images/background/subsidiaries/m-tech-s1.svg')}}"
                 class="d-block mx-auto img-fluid" alt="">
          </figure>
        </div>
      </div>
    </div>
  </section>

  <section class="py-10" id="tech-services">
    <div class="col-lg-10 px-3 mx-auto">
      <header class="text-center mb-7">
        <h2 class="title mb-2">
          <span>Our</span>
          <span class="color">Services</span>
        </h2>
        <p>
          Explore our range of innovative technology solutions designed to transform your business. Metalex Technologies
          delivers cutting-edge services tailored to meet your unique needs. Let us empower your growth with scalable
          and reliable solutions.
        </p>
      </header>

      <div class="d-flex flex-wrap justify-content-between justify-content-md-center"
           style="row-gap: 4em; column-gap: 2.5em">

        {{--  Website Design & Development--}}
        <div class="col-md-4 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <figure>
                <img src="{{asset('assets/images/background/subsidiaries/icons/code.svg')}}" alt="">
              </figure>
              <h3>Website design and development.</h3>
              <p>We create visually appealing, user-friendly, and high-performing websites that drive engagement and
                growth.</p>
            </div>
          </div>
        </div>

        {{--  Custom Software & Mobile App Dev--}}
        <div class="col-md-4 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <figure>
                <img src="{{asset('assets/images/background/subsidiaries/icons/dashboard.svg')}}" alt="">
              </figure>
              <h3>Custom Software and Mobile App Development</h3>
              <p>
                Our team delivers tailor-made software and apps designed to meet your specific business needs andgoals
              </p>
            </div>
          </div>
        </div>

        {{--  IT Infrastructure Solutions--}}
        <div class="col-md-4 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <figure>
                <img src="{{asset('assets/images/background/subsidiaries/icons/bulb.svg')}}" alt="">
              </figure>
              <h3>IT Infrastructure Solutions</h3>
              <p>
                We provide robust and scalable IT infrastructure setups to ensure seamless operations and optimal
                performance.
              </p>
            </div>
          </div>
        </div>

        {{--  Cybersecurity Services & Digital Transformation Consultancy--}}
        <div class="col-md-4 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <figure>
                <img src="{{asset('assets/images/background/subsidiaries/icons/shield.svg')}}" alt="">
              </figure>
              <h3>Cybersecurity Services and Digital Transformation Consultancy</h3>
              <p>We safeguard your business with advanced cybersecurity and support your digital transformation.</p>
            </div>
          </div>
        </div>


        {{--  Managed IT Support--}}
        <div class="col-md-4 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <figure>
                <img src="{{asset('assets/images/background/subsidiaries/icons/support.svg')}}" alt="">
              </figure>
              <h3>Managed IT Support and Training</h3>
              <p>Our comprehensive support and training services help your team stay productive and equipped with the
                latest IT solutions.</p>
            </div>
          </div>
        </div>

        {{--  Data Analytics--}}
        <div class="col-md-4 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <figure>
                <img src="{{asset('assets/images/background/subsidiaries/icons/server.svg')}}" alt="">
              </figure>
              <h3>Data Analytics and Business Intelligence</h3>
              <p>We transform data into actionable insights, empowering businesses to make informed, data-driven
                decisions.</p>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>

  {{--  Portfolio --}}
  <section class="py-lg-8" id="tech-portfolio">
    <div class="col-lg-10 px-3 mx-auto pb-7">
      <header class="text-center">
        <h2 class="title mb-3">
          <span>Our</span>
          <span class="color">Portfolio</span>
        </h2>
        <p>
          This section highlights the projects Metalex Technologies has handled, showcasing our expertise, innovation,
          and dedication to delivering exceptional results.
        </p>
      </header>
    </div>

    <div class="py-6" id="projects">
      <div class="col-lg-10 px-3 mx-auto">
        <div class="row mt-5 justify-content-center mx-auto gap-4">
          @include('main.portfolio.portfolio')
        </div>
      </div>
    </div>
  </section>

  {{--  Additional Info--}}
  <section id="before-footer" class="py-10"
           style="background: url({{asset('assets/images/background/home/before-footer-light.svg')}})">
    <div id="tech-join-us" class="text-center px-3 col-lg-6 mx-auto">
      <h3 class="mb-3">Ready to Innovate?</h3>
      <p class="text-dark d-none d-md-block">
        Get in Touch with Us Today and Begin Your Journey Towards Transforming Your Business with Cutting-Edge
        Solutions!
      </p>
      <a href="#" class="btn text-white w-100 w-sm-auto mt-3">Talk To Our Experts</a>
    </div>
  </section>

  @include('main.partials.footer')
@endsection

