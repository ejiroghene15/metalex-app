@extends('layout.master')

@section('title', 'Metalex Academy')

@section('style')
  @parent
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@section('body')
  @include('main.partials.navbar')

  {{--  Jumbotron --}}
  <section class="pt-3 pb-8" id="academy-jumbotron">
    <div class="col-lg-9 mx-auto text-center">
      <h2 class="text-white" id="heading">Metalex Academy Ltd</h2>
      <p class="text-white pt-4 pb-7 px-xl-15">
        Gain the skills you need to excel in today’s fast-paced professional world with Metalex Academy’s
        industry-driven programs.
      </p>
      <a href="" class="btn text-white">Join A Program Today</a>
    </div>
  </section>

  {{-- About --}}
  <section class="py-10" id="academy-about">
    <div class="col-lg-10 px-3 mx-auto">
      <div class="row flex-lg-nowrap flex-column-reverse flex-lg-row justify-content-between" style="column-gap: 2em">
        <div class="col-lg-6" id="section-1">
          <article class="mb-5">
            <h2 class="title mb-3 d-none d-lg-block">
              <span class="color">About</span>
              <span>Metalex Academy</span>
            </h2>

            <p>
              At Metalex Academy, we are committed to empowering individuals with the essential skills needed to thrive
              in today’s ever-evolving professional world. Our mission is to bridge the gap between education and
              industry demands by offering tailored training programs that equip learners with practical knowledge and
              expertise. Whether you are looking to advance your career, switch fields, or start a new venture, we
              provide the tools and guidance to help you succeed in a competitive job market.
            </p>

            <p class="mt-5">
              Our programs are designed to cater to learners at all stages—whether you’re a beginner exploring a new
              field, a professional seeking to upskill, or an entrepreneur looking to drive innovation in your business.
              By fostering creativity, collaboration, and critical thinking, we help our students transform their
              ambitions into measurable achievements.
            </p>

          </article>
        </div>
        <div class="col-lg-6" id="section-2">
          <figure>
            <h2 class="title mb-3 d-block d-lg-none">
              <span class="color">About</span>
              <span>Metalex Academy</span>
            </h2>
            <img src="{{asset('assets/images/background/subsidiaries/m-academy-s1.svg')}}" class="d-block mx-auto"
                 alt="">
          </figure>
        </div>
      </div>
    </div>
  </section>

  {{--  Programs Offered--}}
  <section class="py-lg-8" id="academy-programs">
    <div class="col-lg-10 px-3 mx-auto pb-7">
      <header class="text-center">
        <h2 class="title mb-3">
          <span class="color">Programs</span>
          <span>Offered</span>
        </h2>
        <p>
          Explore our range of innovative technology solutions designed to transform your business. Metalex Technologies
          delivers cutting-edge services tailored to meet your unique needs. Let us empower your growth with scalable
          and reliable solutions.
        </p>
      </header>
    </div>

    <div class="py-6" id="projects">
      <div class="col-lg-10 px-3 mx-auto">
        <div class="container">
          <div class="row justify-content-center gap-5 mx-auto">
            {{--Tech & Digital Skills--}}
            <article class="col-md-4 article">
              <div class="card">
                <div class="card-body d-flex flex-column">
                  <figure>
                    <img src="{{asset('assets/images/background/subsidiaries/m-academy-p1.svg')}}" class="w-100"
                         alt="">
                  </figure>

                  <article class="program-content">
                    <h3 class="mb-0">Technology and Digital Skills</h3>
                    <hr>
                    <h5>Courses</h5>
                    <p class="text-dark">Web Development, Mobile App Development, Data Analysis and Visualization,
                      Graphic Design, UI/UX Design, Software Development, Cybersecurity, Digital Marketing, Video
                      Editing and Production, Cloud Computing.</p>
                  </article>
                  <button class="btn explore-proj-btn">Learn More</button>
                </div>
              </div>
            </article>

            {{--Business & Management Skills--}}
            <article class="col-md-4 article">
              <div class="card">
                <div class="card-body d-flex flex-column">
                  <figure>
                    <img src="{{asset('assets/images/background/subsidiaries/m-academy-p2.svg')}}" class="w-100"
                         alt="">
                  </figure>

                  <article class="program-content">
                    <h3 class="mb-0">Business and Management Skills</h3>
                    <hr>
                    <h5>Courses</h5>
                    <p class="text-dark">
                      Project Management, Financial Modeling and Analysis, Business Analytics, E-commerce Management,
                      Customer Relationship Management.
                    </p>
                  </article>
                  <button class="btn explore-proj-btn">Learn More</button>
                </div>
              </div>
            </article>

            {{--Creative Arts--}}
            <article class="col-md-4 article">
              <div class="card">
                <div class="card-body d-flex flex-column">
                  <figure>
                    <img src="{{asset('assets/images/background/subsidiaries/m-academy-p3.svg')}}" class="w-100"
                         alt="">
                  </figure>

                  <article class="program-content">
                    <h3 class="mb-0">Creative Arts and Multimedia Skills</h3>
                    <hr>
                    <h5>Courses</h5>
                    <p class="text-dark">
                      Photography, Content Creation, Animation and Motion Graphics, Game Development, Music Production.
                    </p>
                  </article>
                  <button class="btn explore-proj-btn">Learn More</button>
                </div>
              </div>
            </article>

            {{--Technical Writing--}}
            <article class="col-md-4 article">
              <div class="card">
                <div class="card-body d-flex flex-column">
                  <figure>
                    <img src="{{asset('assets/images/background/subsidiaries/m-academy-p4.svg')}}" class="w-100"
                         alt="">
                  </figure>

                  <article class="program-content">
                    <h3 class="mb-0">Technical Writing and Publishing</h3>
                    <hr>
                    <h5>Courses</h5>
                    <p class="text-dark">
                      Proposal and Grant Writing, Copywriting and Content Marketing, Ebook and Journal Formatting.
                    </p>
                  </article>
                  <button class="btn explore-proj-btn">Learn More</button>

                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{--  Why Choose Us --}}
  <section class="py-10" id="academy-why-choose-us">
    <div class="col-lg-10 px-3 mx-auto">
      <div class="row flex-lg-nowrap  flex-column-reverse flex-lg-row-reverse">
        <div class="col-lg-6" id="section-1">
          <article class="mb-5">
            <h2 class="title mb-5 d-none d-lg-block">
              <span class="color">Why</span>
              <span>Choose Us?</span>
            </h2>

            <p>
              <span class="lead">Industry-Relevant Courses </span>
              Our programs are designed in collaboration with industry professionals to ensure you gain cutting-edge
              skills and knowledge that are in demand in today’s workforce. We focus on practical, hands-on learning
              that prepares you for real-world challenges.
            </p>

            <p>
              <span class="lead">Experienced Instructors</span>
              Learn from experts who are not only seasoned professionals but also passionate educators. Our instructors
              bring years of practical experience, mentorship, and insights to help you achieve your goals.
            </p>

            <p>
              <span class="lead">Flexible Learning Formats</span>
              We understand the need for flexibility in today’s busy world. That’s why we offer a variety of learning
              options, including online, in-person, and hybrid formats. Whether you’re a full-time student, a working
              professional, or an entrepreneur, we have a solution for your schedule.
            </p>

            <p>
              <span class="lead">Comprehensive Learning Support</span>
              From personalized mentorship to access to modern tools and resources, we ensure you have all the support
              you need to excel. Our focus is on empowering you with the confidence and expertise to succeed.
            </p>
          </article>
        </div>
        <div class="col-lg-6" id="section-2">
          <figure>
            <h2 class="title mb-3 d-block d-lg-none">
              <span class="color">Why</span>
              <span>Choose Us?</span>
            </h2>
            <img src="{{asset('assets/images/background/subsidiaries/m-academy-2.svg')}}" class="d-block mx-auto"
                 alt="">
          </figure>
        </div>
      </div>
    </div>
  </section>

  {{--  Additional Info--}}
  <section id="before-footer" class="py-10"
           style="background: url({{asset('assets/images/background/home/before-footer-orange.svg')}})">
    <div id="academy-join-us" class="text-center px-3 col-lg-8 mx-auto">
      <h3 class="mb-3">Your Future Starts Here</h3>
      <p class="text-dark d-none d-md-block">
        At Metalex Academy, we believe that the right skills can unlock endless opportunities. Whether you're starting a
        new journey or advancing your career, we are here to guide you every step of the way.
      </p>
      <a href="#" class="btn text-white w-100 w-sm-auto mt-3">Enroll Now</a>
    </div>
  </section>

  @include('main.partials.footer')
@endsection
