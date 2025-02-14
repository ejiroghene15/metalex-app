<section id="subsidiary-section" class="py-10">
  <h2 class="text-center title">
    <span>Our</span>
    <span class="color">Subsidiaries</span>
  </h2>

  <div class="col-lg-9 mx-auto d-none d-xl-block">
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
              <a href="{{route('sub.tech')}}" class="btn text-white">
                Learn More
              </a>
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
              <a href="{{route('sub.academy')}}" class="btn text-white">
                Learn More
              </a>
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
              <a href="{{route('sub.publications')}}" class="btn text-white">
                Learn More
              </a>
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
              <a href="{{route('sub.entertainment')}}" class="btn text-white">
                Learn More
              </a>
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
              <a href="{{route('sub.legal')}}" class="btn text-white">
                Learn More
              </a>
            </article>
          </div>
        </div>
      </section>
    </div>
  </div>

  <div class="col-lg-9 mx-auto d-block d-xl-none px-3">
    <!-- Accordion Example -->
    <div class="accordion shadow-none right">

      {{--      Metalex Technologies--}}
      <div class="accordion-item mb-4">
        <h2 class="accordion-header bg-white" id="mx-tech">
          <button class="accordion-button " type="button" data-bs-toggle="collapse"
                  data-bs-target="#mxTech" aria-expanded="true" aria-controls="mxTech">
            Metalex Technologies
          </button>
        </h2>
        <div id="mxTech" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <figure>
              <img src="{{asset('assets/images/background/home/sub-tech.svg')}}" alt="">
            </figure>
            <article>
              <h3>Metalex Technologies</h3>
              <p>
                Providing innovative IT solutions, digital transformation, and consultancy services to individuals and
                businesses globally
              </p>
              <a href="{{route('sub.tech')}}" class="btn text-white">
                Learn More
              </a>
            </article>
          </div>
        </div>
      </div>

      {{--      Metalex Academy--}}
      <div class="accordion-item mb-4">
        <h2 class="accordion-header bg-white" id="mx-academy">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#mxAcademy" aria-expanded="false" aria-controls="mxAcademy">
            Metalex Academy
          </button>
        </h2>
        <div id="mxAcademy" class="accordion-collapse collapse">
          <div class="accordion-body">
            <figure><img src="{{asset('assets/images/background/home/sub-academy.svg')}}" alt=""></figure>
            <article>
              <h3>Metalex Academy</h3>
              <p>
                Delivering practical and professional training to equip individuals with critical soft and hard skills
              </p>
              <a href="{{route('sub.academy')}}" class="btn text-white">
                Learn More
              </a>
            </article>
          </div>
        </div>
      </div>

      {{--      Metalex Publications--}}
      <div class="accordion-item mb-4">
        <h2 class="accordion-header bg-white" id="mx-pub">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#mxPub" aria-expanded="false" aria-controls="mxPub">
            Metalex Publications
          </button>
        </h2>
        <div id="mxPub" class="accordion-collapse collapse"
             aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <figure><img src="{{asset('assets/images/background/home/sub-pub.svg')}}" alt=""></figure
            <article>
              <h3>Metalex Publications</h3>
              <p>
                Specializing in the publication of legal books, journals, magazines, and general publications.
              </p>
              <a href="{{route('sub.publications')}}" class="btn text-white">
                Learn More
              </a>
            </article>
          </div>
        </div>
      </div>

      {{--      Metalex Entertainment--}}
      <div class="accordion-item mb-4">
        <h2 class="accordion-header bg-white" id="mx-ent">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#mxEnt" aria-expanded="false" aria-controls="mxEnt">
            Metalex Entertainment
          </button>
        </h2>
        <div id="mxEnt" class="accordion-collapse collapse"
             aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <figure><img src="{{asset('assets/images/background/home/sub-ehub.svg')}}" alt=""></figure>
            <article>
              <h3>Metalex Entertainment</h3>
              <p>
                Revolutionizing entertainment through artist management, creative productions, and media consultancy.
              </p>
              <a href="{{route('sub.entertainment')}}" class="btn text-white">
                Learn More
              </a>
            </article>
          </div>
        </div>
      </div>

      {{--      Metalex LP--}}
      <div class="accordion-item mb-3">
        <h2 class="accordion-header bg-white" id="mx-lp">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#mxLp" aria-expanded="false" aria-controls="mxLp">
            Metalex Legal
          </button>
        </h2>
        <div id="mxLp" class="accordion-collapse collapse"
             aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <figure><img src="{{asset('assets/images/background/home/sub-legal.svg')}}" alt=""></figure>
            <article>
              <h3>Metalex Legal</h3>
              <p>
                A full-service law firm offering expertise in corporate law, intellectual property, technology law,
                and more.
              </p>
              <a href="{{route('sub.legal')}}" class="btn text-white">
                Learn More
              </a>
            </article>
          </div>
        </div>
      </div>

    </div>
  </div>

</section>
