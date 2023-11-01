@extends('layout.master')

@section('title', 'About')

@section('body')
  @include('partials.navbar')

  <!-- Page Content -->
  <main>
    <section class="py-10 bg-white">
      <div class="container">
        <div class="row">
          <div class="offset-lg-2 col-lg-8 col-md-12 col-12 mb-12">
            <!-- caption-->
            <h1 class="display-3 fw-bold mb-3">Hi there, we’re <span class="text-primary">Metalex</span></h1>
            <!-- para -->
            <p class="h2 mb-3 d-">What We Do</p>
            <p class="mb-0 h4 text-body lh-3">
              At Metalex Technologies, we are committed to designing and developing tech solutions to solve problems in
              the legal space and justice system. With Metalex, we are reshaping the way legal knowledge and services
              are accessed and shared. Our mission is simple yet profound. To create a vibrant and inclusive global
              community where legal professionals and non-legal individuals can get discovered, learn and commect to
              solve legal problems.
            </p>


          </div>
        </div>
        <!-- gallery -->
        <div class="gallery mb-12">
          <!-- gallery-item -->
          <figure class="gallery__item gallery__item--1 mb-0">
            <img src="../assets/images/about/geeksui-img-1.jpg" alt="Gallery image 1" class="gallery__img rounded-3">
          </figure>
          <!-- gallery-item -->
          <figure class="gallery__item gallery__item--2 mb-0">
            <img src="../assets/images/about/geeksui-img-2.jpg" alt="Gallery image 2" class="gallery__img rounded-3">
          </figure>
          <!-- gallery-item -->
          <figure class="gallery__item gallery__item--3 mb-0">
            <img src="../assets/images/about/geeksui-img-3.jpg" alt="Gallery image 3" class="gallery__img rounded-3">
          </figure>
          <!-- gallery-item -->
          <figure class="gallery__item gallery__item--4 mb-0">
            <img src="../assets/images/about/geeksui-img-4.jpg" alt="Gallery image 4" class="gallery__img rounded-3">
          </figure>
          <!-- gallery-item -->
          <figure class="gallery__item gallery__item--5 mb-0">
            <img src="../assets/images/about/geeksui-img-5.jpg" alt="Gallery image 5" class="gallery__img rounded-3">
          </figure>
          <!-- gallery-item -->
          <figure class="gallery__item gallery__item--6 mb-0">
            <img src="../assets/images/about/geeksui-img-6.jpg" alt="Gallery image 6" class="gallery__img rounded-3">
          </figure>
        </div>

        <div class="row">
          <!-- row -->
          <div class="col-md-8 offset-right-md-4">
            <!-- heading -->
            <h1 class="display-4 fw-bold mb-3">Our global reach</h1>
            <!-- para -->
            <p class="lead lh-3 fs-4">
              Our reach extends across borders, welcoming legal professionals and individuals from around the world.
              We are dedicated to fostering a truly global community where legal knowledge and services transcend
              national boundaries, enabling meaningful connections and knowledge sharing on a worldwide scale. Our
              commitment to global reach ensures that anyone, no matter where they are, can benefit from the
              resources, expertise, and opportunities within Metalex.
            </p>
          </div>
          <div class="col-lg-4 col-md-6 col-6">
            <!-- counter -->
            <div class="border-top pt-4 mt-6 mb-5">
              <h1 class="display-3 fw-bold mb-0">2</h1>
              <p class="text-uppercase text-muted">Published Magazines</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-6">
            <!-- counter -->
            <div class="border-top pt-4 mt-6 mb-5">
              <h1 class="display-3 fw-bold mb-0">10K</h1>
              <p class="text-uppercase text-muted">LinkedIn Impressions</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-6">
            <!-- counter -->
            <div class="border-top pt-4 mt-6 mb-5">
              <h1 class="display-3 fw-bold mb-0">55</h1>
              <p class="text-uppercase text-muted">Article Publications</p>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- features -->
    <section class="py-lg-16 py-10">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-right-md-5 col-12 mb-6">
            <!-- caption -->
            <h2 class="display-4 mb-3 fw-bold">Our core values</h2>
            <p class="lead fs-4 lh-3">
              We are driven by a set of core values that guide our actions, drive our team resilience, and define our
              vision for the future of law
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-12">
            <!-- card -->
            <div class="card mb-4 mb-lg-0">
              <!-- card body -->
              <div class="card-body p-5">
                <!-- icon -->
                <div class="mb-3"><i class="mdi mdi-school-outline mdi-48px text-primary lh-1 "></i></div>
                <h3 class="mb-2">Seamless Access to Justice</h3>
                <p class="mb-0 fs-6 lh-3 fw-semi-bold">
                  We believe that optimal legal services should be accessible to all, and we are committed to making
                  justice seamlessly available to anyone globally.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-12">
            <!-- card -->
            <div class="card mb-4 mb-lg-0">
              <!-- card body -->
              <div class="card-body p-5">
                <!-- icon -->
                <div class="mb-3"><i class="mdi mdi-account-group mdi-48px text-primary lh-1 "></i></div>
                <h3 class="mb-2">Efficient Legal Tech Solutions</h3>
                <p class="mb-0 fs-6 lh-3 fw-semi-bold">
                  In a fast-paced digital world, we strive to provide efficient legal
                  solutions that meet the needs of today&#39;s professionals and individuals.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-12">
            <!-- card -->
            <div class="card mb-4 mb-lg-0">
              <!-- card body -->
              <div class="card-body p-5">
                <!-- icon -->
                <div class="mb-3"><i class="mdi mdi-finance mdi-48px text-primary lh-1 "></i></div>
                <h3 class="mb-2">Legal Education and Inclusivity</h3>
                <p class="mb-0 fs-6 lh-3 fw-semi-bold">
                  We believe in the power of a diverse and inclusive community, where legal
                  professionals and people from all walks of life can unite, learn, and grow together.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section class="py-lg-16 py-10 bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-right-md-4 col-12 mb-10">
            <!-- heading -->
            <h2 class="display-4 mb-3 fw-bold">Our Team</h2>
            <!-- lead -->
            <p class="lead fs-4 lh-3 mb-5">
              We are building a global team of diverse talents, united by a shared vision to revolutionize the practice
              of law and justice globally. We bring together expertise from various fields to drive our core values. We
              welcome individuals who share our vision and are interested in contributing their expertise, and be
              part of shaping the future of law.
            </p>
            <!-- btn -->
            <a href="#" class="btn btn-dark">Join Us</a>
          </div>
        </div>
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-start gap-3">
          <div class="">
            <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
              <!-- avatar -->
              <img src="../assets/images/avatar/akpos.jpg" alt="" class="imgtooltip rounded-circle"
                   style="height: 200px; width: 200px; border-radius: 50%"
                   data-template="one">
              <!-- text -->
              <div id="one" class="d-none">
                <div class="mb-0 fw-semi-bold">Kohwo Akpofure</div>
                <span>Founder</span>
              </div>
            </div>
          </div>
          <div class="">
            <div class="p-xl-5 p-lg-3 mb-3 mb-lg-0">
              <!-- avatar -->
              <img src="../assets/images/avatar/orobosa.jpg" alt="" class="imgtooltip  rounded-circle"
                   width="100" style="height: 200px; width: 200px"
                   data-template="two">
              <!-- text -->
              <div id="two" class="d-none">
                <div class="mb-0 fw-semi-bold">Orobosa Ebowe</div>
                <span>Associate</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>


  @include('partials.footer')
@endsection
