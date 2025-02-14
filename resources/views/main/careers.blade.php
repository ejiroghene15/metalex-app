@extends('layout.master')

@section('title', 'Careers')

@section('style')
  @parent
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@section('body')
  @include('main.partials.navbar')

  {{--  Jumbotron --}}
  <section class="pt-3 pb-8" id="career-jumbotron">
    <div class="col-lg-9 mx-auto text-center">
      <h2 class="text-white" id="heading">CAREERS AT METALEX GROUP</h2>
      <p class="text-white pt-4 pb-7 px-xl-15">
        Join our dynamic team at Metalex Group, where innovation meets opportunity. Whether you're an experienced
        professional or just starting out, we provide the tools, culture, and support to help you excel and make an
        impact across our diverse industries.
      </p>
      <button class="btn text-white">Join Our Group</button>
    </div>
  </section>

  {{-- Career --}}
  <section class="py-10" id="career-info">
    <div class="col-lg-10 px-3 mx-auto">
      <div class="row flex-lg-nowrap flex-column-reverse flex-lg-row justify-content-between" style="column-gap: 3em">
        <div class="col-lg-6" id="section-1">
          <article class="mb-5">
            <h2 class="title mb-3 d-none d-lg-block">
              <span class="color">Join Our Team,</span>
              <span>Shape the Future</span>
            </h2>
            <p>
              At Metalex Group, we believe in empowering individuals to achieve their professional best while
              contributing to innovative solutions across industries. Our subsidiaries offer diverse opportunities to
              make an impact in a dynamic and innovative environment.
            </p>

            <div id="why">
              <p>Why Work With Us?</p>
              <ol>
                <li>Collaborative Environment: Be part of a team that values creativity, innovation, and teamwork.</li>
                <li>Professional Growth: Access training programs, mentorship, and opportunities to grow your skills and
                  expertise.
                </li>
                <li>Dynamic Industries: Contribute to projects that span multiple sectors, including technology,
                  entertainment, publishing, education, and law.
                </li>
                <li>Impactful Work: Join a company that drives meaningful change and delivers value to clients and
                  communities.
                </li>
              </ol>
            </div>
          </article>
        </div>
        <div class="col-lg-6" id="section-2">
          <figure>
            <h2 class="title mb-3 d-block d-lg-none">
              <span class="color">Our</span>
              <span>Vision, Mission, and Values</span>
            </h2>
            <img src="{{asset('assets/images/background/careers/people.svg')}}" class="img-fluid" alt="">
          </figure>
        </div>
      </div>
    </div>
  </section>

  <section class="py-10" id="job-roles">
    <div class="col-lg-10 px-3 mx-auto">
      <header class="text-center mb-7">
        <h2 class="title mb-2">
          <span class="color">Job Roles Across the Group</span>
        </h2>
        <p>We are constantly seeking talented professionals to join our team across the following companies:</p>
      </header>

      <div class="d-flex flex-wrap justify-content-between justify-content-md-center"
           style="row-gap: 4em; column-gap: 2.5em">
        {{--  Metalex Technologies--}}
        <div class="col-md-4 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <h3>Metalex Technologies Ltd</h3>
              <hr>
              <p class="mb-1">Roles Include</p>
              <ul>
                <li>Course Coordinators</li>
                <li>Training Facilitators</li>
                <li>Curriculum Developers</li>
              </ul>
              <a href="#" class="btn text-white float-end">Apply</a>
            </div>
          </div>
        </div>

        {{--  Metalex Publishing--}}
        <div class="col-md-4 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <h3>Metalex Publications Ltd</h3>
              <hr>
              <p class="mb-1">Roles Include</p>
              <ul>
                <li>Editors and Writers</li>
                <li>Graphic Designers</li>
                <li>Publishing Coordinators</li>
              </ul>
              <a href="#" class="btn text-white float-end">Apply</a>
            </div>
          </div>
        </div>

        {{--  Metalex Entertainment--}}
        <div class="col-md-4 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <h3>Metalex Entertainment Hub Ltd</h3>
              <hr>
              <p class="mb-1">Roles Include</p>
              <ul>
                <li>Talent Managers</li>
                <li>Creative Directors</li>
                <li>Event Planners</li>
              </ul>
              <a href="#" class="btn text-white float-end">Apply</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 card-container">
          <div class="card subsidiary-card">
            <div class="bg-white">
              <h3>Metalex Legal</h3>
              <hr>
              <p class="mb-1">Roles Include</p>
              <ul>
                <li>Legal Associates</li>
                <li>Research Assistants</li>
                <li>Client Relations Officers</li>
              </ul>
              <a href="#" class="btn text-white float-end">Apply</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  {{--  Why choose us --}}
  <section class="py-lg-10 py-5" id="career-why">
    <div class="col-lg-10 px-3 mx-auto">
      <div class="row flex-lg-nowrap flex-column-reverse flex-lg-row-reverse">
        <div class="col-lg-6" id="section-1">
          <article class="mb-5">
            <h2 class="title mb-5 d-none d-lg-block">
              <span class="color">Internship</span>
              <span>and Graduate Opportunities</span>
            </h2>
            <p>
              Are you a recent graduate or student looking to kickstart your career? Metalex Group offers internship
              programs across all subsidiaries, providing hands-on experience and mentorship to help you grow.
            </p>

          </article>
        </div>
        <div class="col-lg-6" id="section-2">
          <figure>
            <img src="{{asset('assets/images/background/careers/why.svg')}}" class="d-block mx-auto img-fluid" alt="">
          </figure>
        </div>
      </div>
    </div>
  </section>

  {{--  Additional Info--}}
  <section id="before-footer" class="py-10"
           style="background: url({{asset('assets/images/background/home/before-footer-light.svg')}})">
    <div id="job-join-us" class="text-center px-3 col-lg-6 mx-auto">
      <h3 class="mb-3">Join Us Today</h3>
      <p class="text-dark d-none d-md-block">
        Metalex Group is more than a workplace. It is a platform to innovate, collaborate, and grow. Together, we are
        shaping the future.
      </p>
      <a href="#" class="btn text-white w-100 w-sm-auto">Join Our Group</a>
    </div>
  </section>

  @include('main.partials.footer')
@endsection

