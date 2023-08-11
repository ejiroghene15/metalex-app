@extends('publications.layout')

@section('title', 'Publication - Authors')

@section('publication_content')
  <header class="mb-5">
    <h4 class="text-gray-600">Authors</h4>
  </header>

  <section class="row">
    @for($i = 0; $i < 6; $i++)
      <article class="col-lg-6 col-md-6 col-12">
        <!-- Card -->
        <div class="card  mb-4 ">
          <!-- Card body -->
          <div class="card-body">
            <div class="d-lg-flex">
              <div class="position-relative">
                <img src="../assets/images/avatar/avatar-1.jpg" alt=""
                     class="rounded-circle avatar-xl mb-3 mb-lg-0 ">
                <a href="#" class="position-absolute mt-2 ms-n3" data-bs-toggle="tooltip" data-placement="top"
                   title="Verifed">
                  <img src="../assets/images/svg/checked-mark.svg" alt="" height="30" width="30">
                </a>
              </div>
              <div class="ms-lg-4">
                <h4 class="mb-0">Jenny Wilson</h4>
                <p class="mb-0 fs-6">Front-end Developer, Designer</p>
                <p class="fs-6 mb-1 text-warning"><span>4.5</span><span
                    class="mdi mdi-star text-warning me-2"></span>Instructor Rating</p>
                <p class="fs-6 text-muted"><span class="me-2"><span
                      class="text-dark fw-medium">42</span>
                              Courses</span><span class="ms-2"><span class="text-dark fw-medium">1,10,124
                              </span>
                              Students</span>
                </p>
                <p>I start my development and digital career studying digital
                  design. After taking a couple of programming classes I realize
                  that code is what I wanted to be doing. </p>
                <a href="#" class="btn btn-outline-secondary btn-sm">
                  View Details
                </a>
              </div>
            </div>
          </div>
        </div>
      </article>
    @endfor
  </section>
@endsection
