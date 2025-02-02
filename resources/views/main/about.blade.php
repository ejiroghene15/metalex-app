@extends('layout.master')

@section('title', 'About Us')

@section('style')
  @parent
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@section('body')
  @include('main.partials.navbar')

  {{--  Jumbotron --}}
  <section class="pt-3 pb-8" id="abt-jumbotron">
    <div class="container-lg px-lg-12 text-center">
      <h2 class="text-white" id="heading">Who We Are</h2>
      <p class="text-white pt-4 pb-7 px-xl-15">
        Learn about Metalex Group Limited, a leading conglomerate transforming industries through innovation,
        collaboration, and a commitment to excellence. Explore our journey, values, and vision for the future.
      </p>
      <button class="btn text-white">Contact Us</button>
    </div>
  </section>

  {{--  Who we are --}}
  <section class="py-10" id="abt-who-we-are">

    <div class="col-lg-10 px-3 mx-auto">
      <div class="row flex-lg-nowrap flex-column-reverse flex-lg-row align-items-center gap-2">
        <div class="col-lg-6" id="section-1">
          <article class="mb-5">
            <h2 class="title mb-3 d-none d-lg-block">
              <span class="color">Welcome</span>
              <span>to Metalex Group Limited</span>
            </h2>
            <p>
              At Metalex Group Limited, we are more than a company—we are a dynamic force of innovation and excellence.
              With a presence in technology, education, publishing, entertainment, and law, we pride ourselves on
              delivering solutions that redefine industries and empower individuals and businesses alike.
              Since our inception, Metalex has been committed to creating value through a combination of
              forward-thinking strategies, seamless collaboration, and a relentless drive for excellence.
            </p>
          </article>
          <article>
            <h2 class="title mb-1">
              <span class="color">Who</span>
              <span>We Are</span>
            </h2>
            <p>
              Who We Are
              Metalex Group Limited is a diversified conglomerate with a clear focus on innovation, sustainability, and
              community impact. Our subsidiaries span multiple sectors, enabling us to address diverse needs while
              maintaining a unified mission. Each of our divisions operates independently but contributes to a shared
              vision of creating a better, smarter future for all.

              Our global mindset and local expertise make us uniquely positioned to drive change and growth wherever we
              operate. Whether it’s revolutionizing technology, nurturing the next generation of learners, producing
              impactful content, or providing legal clarity, we are here to lead and inspire.
            </p>
          </article>
        </div>
        <div class="col-lg-6" id="section-2">
          <figure>
            <h2 class="title mb-3 d-block d-lg-none">
              <span class="color">Welcome</span>
              <span>to Metalex Group Limited</span>
            </h2>
            <img src="{{asset('assets/images/background/about/who-we-are.svg')}}" class="" alt="">
          </figure>
        </div>
      </div>
    </div>
  </section>

  {{--  Mission vision --}}
  <section class="py-10" id="abt-mission-vision">
    <div class="col-lg-10 px-3 mx-auto">
      <div class="row flex-lg-nowrap flex-column-reverse flex-lg-row-reverse align-items-center">
        <div class="col-lg-6" id="section-1">
          <article class="mb-5">
            <h2 class="title mb-3 d-none d-lg-block">
              <span class="color">Our</span>
              <span>Vision, Mission, and Values</span>
            </h2>
            <p>
              <span class="lead">Our Vision</span>
              Our vision is to be a global leader in innovation, creating opportunities that empower individuals and
              organizations to achieve their full potential. We strive to inspire progress and set new benchmarks for
              excellence across the diverse industries we serve, all while building a sustainable and inclusive future.

            </p>
            <p>
              <span class="lead">Our Mission</span>
              At Metalex, our mission is to drive sustainable growth through exceptional services, innovative solutions,
              and meaningful partnerships. We aim to address complex challenges, enhance lives, and contribute
              positively to the communities where we operate. Everything we do reflects our dedication to shaping a
              world where creativity, collaboration, and progress thrive.

            </p>
            <p>
              <span class="lead">Our Values</span>
              Our values define who we are and guide how we operate. At the heart of our organization is a steadfast
              commitment to innovation, integrity, and excellence. We believe in the power of collaboration and in
              fostering relationships that create lasting value. By aligning our operations with the principles of
              sustainability, we ensure that our work benefits not just the present but also future generations.
            </p>
          </article>
        </div>
        <div class="col-lg-6" id="section-2">
          <figure>
            <h2 class="title mb-3 d-block d-lg-none">
              <span class="color">Our</span>
              <span>Vision, Mission, and Values</span>
            </h2>
            <img src="{{asset('assets/images/background/about/mission-vision.svg')}}" class="" alt="">
          </figure>
        </div>
      </div>
    </div>
  </section>

  {{--  Subsidiaries --}}
  <section class="py-10" id="abt-subsidiaries">
    <div class="col-lg-10 px-3 mx-auto">
      <header class="text-center mb-5">
        <h2 class="title mb-4">
          <span>Our</span>
          <span class="color">Subsidiaries</span>
        </h2>
        <p>Metalex operates through specialized divisions, each contributing to our shared mission</p>
      </header>

      <div class="d-flex flex-wrap justify-content-between justify-content-md-center"
           style="row-gap: 4em; column-gap: 2.5em">
        {{--  Metalex Technologies--}}
        <div class="col-md-4 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <figure>
                <img src="{{asset('assets/images/svg/abt-lightbulb.svg')}}" alt="">
              </figure>
              <h3>Metalex Technologies</h3>
              <p>Cutting-edge innovations that drive efficiency and solve real-world problems.</p>
              <a href="#" class="btn text-white">Learn More</a>
            </div>
          </div>
        </div>

        {{--  Metalex Academy--}}
        <div class="col-md-4 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <figure>
                <img src="{{asset('assets/images/svg/abt-cap.svg')}}" alt="">
              </figure>
              <h3>Metalex Academy</h3>
              <p>Transformative learning solutions that empower individuals to achieve more.</p>
              <a href="#" class="btn text-white">Learn More</a>
            </div>
          </div>
        </div>

        {{--  Metalex Publishing--}}
        <div class="col-md-4 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <figure>
                <img src="{{asset('assets/images/svg/abt-publish.svg')}}" alt="">
              </figure>
              <h3>Metalex Publishing</h3>
              <p>Quality content and platforms that inform, entertain, and inspire.</p>
              <a href="#" class="btn text-white">Learn More</a>
            </div>
          </div>
        </div>

        {{--  Metalex Entertainment--}}
        <div class="col-md-4 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <figure>
                <img src="{{asset('assets/images/svg/abt-entertainment.svg')}}" alt="">
              </figure>
              <h3>Metalex Entertainment</h3>
              <p>Captivating productions that spark imagination and connect communities.</p>
              <a href="#" class="btn text-white">Learn More</a>
            </div>
          </div>
        </div>

        {{--  Metalex Legal--}}
        <div class="col-md-4 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <figure>
                <img src="{{asset('assets/images/svg/abt-legal.svg')}}" alt="">
              </figure>
              <h3>Metalex Legal</h3>
              <p>Expert legal services tailored to meet diverse client needs.</p>
              <a href="#" class="btn text-white">Learn More</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  {{--  Why choose us --}}
  <section class="pt-10 pb-5" id="abt-why-choose-us">
    <div class="col-lg-10 px-3 mx-auto">
      <div class="row flex-lg-nowrap flex-column-reverse flex-lg-row-reverse align-items-center">
        <div class="col-lg-6" id="section-1">
          <article class="mb-5">
            <h2 class="title mb-5 d-none d-lg-block">
              <span class="color">Why</span>
              <span>Choose Us?</span>
            </h2>
            <p>
              <span class="lead">Diverse Expertise</span>
              With a wide array of industries under one roof, we provide integrated solutions that meet complex needs.
            </p>

            <p>
              <span class="lead">Commitment to Quality</span>
              We hold ourselves to the highest standards to ensure client satisfaction.
            </p>

            <p>
              <span class="lead">Global Reach, Local Impact</span>
              While we operate on a global scale, our solutions are tailored to local needs.
            </p>

            <p>
              <span class="lead">Sustainable Practices</span>
              We believe in business growth that aligns with environmental and societal well-being.
            </p>
          </article>
        </div>
        <div class="col-lg-6" id="section-2">
          <figure>
            <h2 class="title mb-3 d-block d-lg-none">
              <span class="color">Why</span>
              <span>Choose Us?</span>
            </h2>
            <img src="{{asset('assets/images/background/about/why-choose-us.svg')}}" class="d-block mx-auto" alt="">
          </figure>
        </div>
      </div>
    </div>
  </section>

  {{--  Additional Info--}}
  <section id="before-footer" class="mt-5">
    <div id="abt-join-us" class="text-center px-3 col-lg-7 mx-auto">
      <h3 class="mb-3">Join Us on Our Journey</h3>
      <p class="text-dark d-none d-md-block">
        At Metalex, we are constantly evolving, exploring new frontiers, and building the future we envision. Whether
        you're a client, partner, or prospective employee, we invite you to join us in making a meaningful impact across
        industries. Together, we are driving innovation, fostering growth, and shaping tomorrow.
      </p>
      <a href="#" class="btn text-white w-100 w-sm-auto">Get In Touch With Us</a>
    </div>
  </section>

  @include('main.partials.footer')
@endsection
