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
    <div class="container-lg px-lg-12">
      <div class="row justify-content-between">
        <div class="col-md-6" style="flex-basis: 637px">
          <small style="background-color: #CCCCCC; color: #1D2A44; padding: 8px; font-size: 14px; line-height: 88px">
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
          <button class="btn text-white mb-3">
            Explore Our Group
          </button>
          <div>
            <img src="{{asset('assets/images/svg/star-group.svg')}}" alt="">
            <span class="text-white tt">Trusted by many!</span>
          </div>
        </div>
        <div class="col">
          <img src="{{asset('assets/images/background/home/jumbotron.svg')}}" class="float-end" alt="">
        </div>
      </div>
    </div>
  </section>

  {{--  Info Metrics--}}
  <section id="record">
    <div class="row justify-content-center text-center">
      <div class="col-md-3 no">
        <h3>3</h3>
        <small>Publications</small>
      </div>
      <div class="col-md-3 no">
        <h3>10K</h3>
        <small>LinkedIn Impressions</small>
      </div>
      <div class="col-md-3 no">
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
      <div class="row flex-lg-nowrap">
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
  <section id="subsidiary-section" class="py-10">
    <h2 class="text-center title">
      <span>Our</span>
      <span class="color">Subsidiaries</span>
    </h2>

    <div class="col-lg-9 mx-auto">
      <div class="d-flex justify-content-between gap-16">
        <section class="left d-flex align-self-baseline">
          <p class="scrollbar position-relative">
            <span class="position-absolute"></span>
          </p>
          <ul class="nav">
            <li class="item active" id="v-pills-tech-tab" data-bs-toggle="tab" data-bs-target="#v-pills-tech">Metalex
              Technologies
            </li>
            <li class="item" data-bs-toggle="tab" id="v-pills-academy-tab" data-bs-target="#v-pills-academy">Metalex
              Academy
            </li>
            <li class="item" data-bs-toggle="tab" id="v-pills-pub-tab" data-bs-target="#v-pills-pub">Metalex
              Publications
            </li>
            <li class="item" data-bs-toggle="tab" id="v-pills-e-hub-tab" data-bs-target="#v-pills-e-hub">Metalex
              Entertainment Hub
            </li>
            <li class="item" data-bs-toggle="tab" id="" data-bs-target="#v-pills-legal">Metalex Legal</li>
          </ul>
        </section>
        <section class="right tabs p-5">
          <div class="tab-content" id="v-pills-tabContent">
            {{--  Metalex Technologies Tab--}}
            <div class="tab-pane fade show active" id="v-pills-tech" role="tabpanel" aria-labelledby="v-pills-tech-tab">
              <img src="{{asset('assets/images/background/home/sub-tech.svg')}}" alt="">
              <article>
                <h3>Metalex Technologies</h3>
                <p>
                  Providing innovative IT solutions, digital transformation, and consultancy services to individuals and
                  businesses globally
                </p>
                <button class="btn text-white">
                  Learn More
                </button>
              </article>
            </div>

            {{--  Metalex Academy Tab--}}
            <div class="tab-pane fade" id="v-pills-academy" role="tabpanel" aria-labelledby="v-pills-academy-tab">
              <img src="{{asset('assets/images/background/home/sub-academy.svg')}}" alt="">
              <article>
                <h3>Metalex Academy</h3>
                <p>
                  Delivering practical and professional training to equip individuals with critical soft and hard skills
                </p>
                <button class="btn text-white">
                  Learn More
                </button>
              </article>
            </div>

            {{--  Metalex Publications Tab--}}
            <div class="tab-pane fade" id="v-pills-pub" role="tabpanel" aria-labelledby="v-pills-pub-tab">
              <img src="{{asset('assets/images/background/home/sub-pub.svg')}}" alt="">
              <article>
                <h3>Metalex Publications</h3>
                <p>
                  Specializing in the publication of legal books, journals, magazines, and general publications.
                </p>
                <button class="btn text-white">
                  Learn More
                </button>
              </article>
            </div>

            {{--  Metalex Entertainment Hub Tab--}}
            <div class="tab-pane fade" id="v-pills-e-hub" role="tabpanel" aria-labelledby="v-pills-e-hub-tab">
              <img src="{{asset('assets/images/background/home/sub-ehub.svg')}}" alt="">
              <article>
                <h3>Metalex Entertainment</h3>
                <p>
                  Revolutionizing entertainment through artist management, creative productions, and media consultancy.
                </p>
                <button class="btn text-white">
                  Learn More
                </button>
              </article>
            </div>

            {{--  Metalex Legal Tab--}}
            <div class="tab-pane fade" id="v-pills-legal" role="tabpanel" aria-labelledby="v-pills-legal-tab">
              <img src="{{asset('assets/images/background/home/sub-legal.svg')}}" alt="">
              <article>
                <h3>Metalex Legal</h3>
                <p>
                  A full-service law firm offering expertise in corporate law, intellectual property, technology law,
                  and more.
                </p>
                <button class="btn text-white">
                  Learn More
                </button>
              </article>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>

  {{--  News & Updates--}}
  <section id="news-updates" class="py-7">
    <h2 class="text-center title">
      <span class="color">News </span>
      <span>& Updates</span>
    </h2>

    <div class="container">
      <div id="body" class="p-7">
        <header>
          <p class="text-dark mb-0">Featured News & Updates <i class="bi bi-dash-lg text-dark"></i></p>
          <a href="">See All News <i class="bi bi-chevron-right"></i></a>
        </header>

        {{--This displays the news and updates--}}
        @include('main.components.news-updates')
      </div>
    </div>
  </section>

  {{--  Testimonials--}}
  <section id="testimonials" class="py-7">
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

                    <p class="mb-0 py-3" style="font-size: 16px">
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

                    <p class="mb-0 py-3" style="font-size: 16px">
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

    <div class="col-lg-9 mx-auto p-5" id="body">
      <div class="d-flex align-items-center gap-5">
        <div class="col-md-3" style="flex-basis: 384px">
          <img src="{{asset('assets/images/background/home/medium-shot-female-economist-working-office.svg')}}" alt="">
        </div>
        <div class="col">
          <header id="info">
            <h3>Get in touch with us.</h3>
            <p>Fill out the form below, and our team will get back to you as soon as possible.</p>
          </header>
          <form action="" id="form">
            <div class="d-flex gap-5">
              <div class="col-md-5 flex-grow-1">
                <div class="mb-3">
                  <label for="name" class="form-label">Name *</label>
                  <input type="text" class="form-control" id="name" required>
                </div>
              </div>

              <div class="col-md-5 flex-grow-1">
                <div class="mb-3">
                  <label for="email" class="form-label">Email *</label>
                  <input type="email" class="form-control" id="email" required>
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="message" class="form-label">Message *</label>
              <textarea class="form-control" id="message" rows="10" required></textarea>
            </div>

            <button type="button" class="btn btn-lg btn-primary text-white">Send Message</button>
          </form>
        </div>
      </div>
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
