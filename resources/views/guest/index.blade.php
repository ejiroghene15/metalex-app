<main>
  <section
    class="pt-10 position-relative bg-cover"
    style="background-image: url({{asset('assets/images/background/gradient-bg.png')}});"
  >
    <!-- Image -->
    <div class="container-lg">
      <div class="row align-items-center mb-6">
        <div class="col-12 col-lg-7 order-md-2 py-5 d-none d-lg-block position-absolute end-0 z--1">
          <div class="mb-2 mb-md-0">
            <img
              src="{{asset('assets/images/background/bg-fp3.jpg')}}"
              alt=""
              class="mx-auto d-block rounded-top"
              style="width: 900px;transform: scale(.6) translateX(10px);filter: saturate(0.5) drop-shadow(12px 30px 31px black);"
            />
          </div>
        </div>
        <div class="col-12 col-lg-5 order-md-1 py-md-8">
          <!-- Heading -->
          <h1 class="display-4 mb-5 fw-bold">
            A Global Hub for Legal Professionals and Clients
          </h1>
          <!-- list -->
          <ul class="list-unstyled text-muted mb-6 lh-3 fw-medium fs-5">
            <li class="mb-2 d-flex">
              Struggling to seamlessly access legal services and effectively meet your legal needs across borders as a
              non-legal professional?
            </li>
            <li class="mb-1 d-flex">
              Do you seek global collaborations, insights and continuing legal education to effectively deliver legal
              services as a legal professional?
            </li>

          </ul>
          @guest
            <!-- Buttons -->
            <div class="mb-8 mb-lg-0">
              <a href="{{route('register')}}" class="btn btn-primary me-3 mb-2 mb-lg-0">
                Get started for Free
              </a>
            </div>
          @endguest
        </div>
      </div>
      <!-- Hero Section -->
      <!-- row -->
    </div>

    <section class="bg-white py-4 shadow-sm">
      <div class="container-lg">
        <div class="row align-items-center">
          <!-- Features -->
          <div class="col-md-4 mb-lg-0 mb-4">
            <div class="d-flex align-items-center">
            <span
              class="icon-shape icon-lg bg-dark-primary-soft rounded-circle text-center text-primary fs-4 flex-shrink-0">
              <i class="fe fe-filter"> </i></span>
              <div class="ms-3">
                <h4 class="mb-0 fw-semi-bold">Listings</h4>
                <p class="mb-0">Get access to top lawyers and firms offering professional legal services in any
                  industry</p>
              </div>
            </div>
          </div>

          <!-- Features -->
          <div class="col-md-4 mb-lg-0 mb-4">
            <div class="d-flex align-items-center">
            <span
              class="icon-shape icon-lg bg-dark-warning-soft rounded-circle text-center text-warning fs-4 flex-shrink-0">
              <i class="fe fe-message-square"> </i></span>
              <div class="ms-3">
                <h4 class="mb-0 fw-semi-bold">Interactive Forum</h4>
                <p class="mb-0">Engage with other individuals within our forums on any topic of interest</p>
              </div>
            </div>
          </div>

          <!-- Features -->
          <div class="col-md-4">
            <div class="d-flex align-items-center">
            <span class="icon-shape icon-lg bg-dark-info-soft rounded-circle text-center text-info fs-4 flex-shrink-0">
              <i class="fe fe-book-open"> </i></span>
              <div class="ms-3">
                <h4 class="mb-0 fw-semi-bold">Articles</h4>
                <p class="mb-0">Stay informed with articles on legal matters across various spheres in the society</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  </section>

  <section class="pb-lg-16 pb-8 pt-20">
    <div class="container">

      <!-- The Solution -->
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-12">
          <!-- image -->
          <div class="mb-4 mb-lg-0 bg-gray-200 rounded-4">
            <img
              src="{{asset('assets/images/background/metalex-solutions-bg-fp.jpg')}}"
              alt="..."
              class="img-fluid w-100 rounded-5"
              style="transform: scale(.9)"
            />
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12 mt-4 mt-lg-0">
          <!-- content -->
          <div class="ps-lg-7">
            <span class="text-primary ls-md text-uppercase fw-semi-bold">Discover, Connect, Learn</span>
            <h2 class="display-4 mt-4 mb-3 fw-bold">
              The Metalex Solutions
            </h2>
            <h3>
              Revolutionizing the practice of law and legal education globally
            </h3>
            <div class="mt-5 ">
              <!-- list -->
              <div class="col">
                <ul class="list-unstyled fs-5 lh-3 fw-medium">
                  <li class="mb-2 d-flex">
                    <i class="mdi mdi-check-circle text-success me-2"></i>
                    <span>
                      Engage with legal experts, solve legal problems, gain insights, and foster invaluable connections in our global space
                    </span>
                  </li>

                  <li class="mb-2 d-flex">
                    <i class="mdi mdi-check-circle text-success me-2"></i>
                    <span>
                      Create, participate in, and moderate legal forums where your questions find answers and your expertise shapes discussions.
                    </span>
                  </li>

                  <li class="mb-2 d-flex">
                    <i class="mdi mdi-check-circle text-success me-2"></i>
                    <span>
                      Access continuing legal education, share experiences, and empower yourself with the collective knowledge of our global legal community
                    </span>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- divider -->
      <hr class="my-lg-12 my-8"/>

      <!-- AI -->
      <div class="d-flex flex-wrap flex-md-row flex-column-reverse align-items-center">
        <!-- col -->
        <div class="col-lg-6 col-md-12 col-12">
          <!-- content -->
          <div class="pe-lg-6 ps-lg-6">
            <h2 class="display-4 mt-4 mb-3 fw-bold">
              Championing The Human Side of Law
            </h2>

            <p class="lh-3">
              At Metalex, we acknowledge the AI revolution. While AI is transforming many industries, we recognise
              that in the legal space, human interactions, experience, empathy and cognition are irreplaceable.
            </p>

            <p class="lh-3">
              As we maintain the optimal efficiency in legal interactions, join us in championing the human side of law
              and seamlessly access legal services tailored to your needs.
            </p>

          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
          <!-- image -->
          <div class="mt-4 mt-lg-0 bg-gray-200 rounded-4">
            <img
              src="assets/images/background/ai-concept-fp.jpg"
              alt="..."
              class="img-fluid w-100 rounded-5"
              style="transform: scale(.9)"
            />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section class="py-lg-14 py-8 bg-gray-200">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-12 col-12">
          <!-- heading -->
          <div class="text-center mb-8">
            <h2 class="display-3 mt-4 mb-3 fw-bold">
              Top Legal Services
            </h2>
            <p class="lead px-8">
              Your Legal solutions Hub
            </p>
          </div>
        </div>
      </div>
      <!-- row -->
      <div class="row">
        <div class="col-md-4 mb-5">
          <!-- card card-borderd  -->
          <div class="card h-100">
            <!-- card body  -->
            <div class="card-body">
              <img
                src="{{asset('assets/images/png/writing.png')}}"
                alt=""
                class="icon-lg mb-3" height="96" width="96"
              />
              <h3 class="fs-4">Document Drafting & Review</h3>
              <p class="mb-0">
                Draft legally sound documents and have them reviewed for accuracy.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-5">
          <!-- card card-borderd  -->
          <div class="card h-100">
            <!-- card body  -->
            <div class="card-body">
              <img
                src="{{asset('assets/images/png/witness.png')}}"
                alt=""
                class="icon-lg mb-3"
              />
              <h3 class="fs-4">Dispute Resolution & Litigation Support</h3>
              <p class="mb-0">
                Get expert assistance for alternative dispute resolution and court cases.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-5">
          <!-- card card-borderd  -->
          <div class="card h-100">
            <!-- card body  -->
            <div class="card-body">
              <img
                src="{{asset('assets/images/png/passport.png')}}"
                alt=""
                class="icon-lg mb-3"
              />
              <h3 class="fs-4">Immigration Services</h3>
              <p class="mb-0">Get expert assistance for immigration and visa matters.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <!-- card card-borderd  -->
          <div class="card h-100">
            <!-- card body  -->
            <div class="card-body">
              <img
                src="{{asset('assets/images/png/agreement.png')}}"
                alt=""
                class="icon-lg mb-3"
              />
              <h3 class="fs-4">Business Legal Services</h3>
              <p class="mb-0">Get expert support for business formation, contracts and compliance</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3">
          <!-- card card-borderd  -->
          <div class="card h-100">
            <!-- card body  -->
            <div class="card-body">
              <img
                src="{{asset('assets/images/png/lightbulb.png')}}"
                alt=""
                class="icon-lg mb-3"
              />
              <h3 class="fs-4">Intellectual Property Services</h3>
              <p class="mb-0">Protect and manage cross-border intellectual property rights.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3">
          <!-- card card-borderd  -->
          <div class="card h-100">
            <!-- card body  -->
            <div class="card-body">
              <img
                src="{{asset('assets/images/png/real-estate.png')}}"
                alt=""
                class="icon-lg mb-3"
              />
              <h3 class="fs-4">Real Estate Services</h3>
              <p class="mb-0">
                Get assistance for property transactions and disputes.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row d-none">
        <!-- button  -->
        <div class="col-12 text-center mt-8">
          <a href="#" class="btn btn-primary">Send a Message</a>
        </div>
      </div>
    </div>
  </section>
</main>
