@extends('layout.master')

@section('title', 'About')

@section('body')
  @include('partials.navbar')

  <!-- Page Content -->
  <main class="bg-white">
    <section class="py-8 bg-light">
      <div class="container">
        <div class="row ">
          <div class="col-lg-8 col-md-10 col-12 mx-auto">
            <!-- text -->
            <div>
              <div class="mb-4 text-center"><h1 class=" fw-bold mb-1">
                  <span class="text-primary">Search</span>
                  for Lawyers and Legal Firms!
                </h1>
                {{--                <p>Company reviews. Salaries. Interviews. Jobs.</p>--}}
              </div>

              <div class="bg-white rounded-md-pill me-lg-10 shadow rounded-3">
                <!-- card body -->
                <div class="p-md-2 p-4">
                  <!-- form -->
                  <form class="row g-1">
                    <div class="col-12 col-md-5">

                      <!-- input -->
                      <div class="input-group mb-2 mb-md-0 border-md-0 border rounded-pill">
                        <!-- input group -->
                        <span class="input-group-text bg-transparent border-0 pe-0 ps-md-3 ps-md-0" id="searchJob"><svg
                            xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                            class="bi bi-search text-muted" viewBox="0 0 16 16">
                          <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg></span>
                        <!-- search -->
                        <input type="search" class="form-control  rounded-pill border-0 ps-3 form-focus-none"
                               placeholder="Job Title" aria-label="Job Title" aria-describedby="searchJob">
                      </div>

                    </div>
                    <div class="col-12 col-md-4">
                      <!-- inpt group -->
                      <div class="input-group mb-3 mb-md-0 border-md-0 border rounded-pill">
                      <span class="input-group-text bg-transparent border-0 pe-0 ps-md-0" id="location"><svg
                          xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                          class="bi bi-geo-alt  text-muted" viewBox="0 0 16 16">
                          <path
                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                          <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg></span>
                        <!-- search -->
                        <input type="search" class="form-control rounded-pill  border-0 ps-3 form-focus-none"
                               placeholder="Location" aria-label="Search Job" aria-describedby="location">
                      </div>

                    </div>
                    <div class="col-12 col-md-3  text-end d-grid">
                      <!-- button -->
                      <button type="submit" class="btn btn-primary rounded-pill">Search</button>
                    </div>
                  </form>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-8">
      <div class="container">
        <div class="row">
          <section class="col-md-8 flex-grow-1">
            @if($directory->count())
              <div class="mb-4"><h2>Legal Representatives</h2></div>
            @endif

            <article class="row">
              @forelse($directory as $_)
                @switch($_->user_type)
                  @case('lawyer')
                    <div class="col-lg-6 col-12 mb-4">
                      <!-- Job Grid Start -->
                      <div class="card card-bordered card-hover cursor-pointer h-100">
                        <!-- card body -->
                        <div class="card-body">
                          <div class="mb-3 mb-md-0">
                            <!-- Img -->
                            <img src="{{$_->avatar}}"
                                 alt="{{$_->fullName()}}" class="icon-shape border rounded-circle avatar-lg">
                          </div>
                          <!-- text -->
                          <div class="w-100 mt-3">
                            <div class="d-flex justify-content-between mb-4">
                              <div>
                                <!-- Job Grid Heading Start-->
                                <h3 class="mb-1 fs-4">
                                  <a href="" class="text-inherit">
                                    {{$_->fullName()}}
                                  </a>
                                </h3>
                                <!-- Job Grid Heading End-->

                                <!-- Job Grid Meta Start-->
                                <div>
                                  <span>at AirTable </span>
                                  <span class="ms-0 badge bg-primary-soft">324 Reviews</span>
                                </div>
                                <!-- Job Grid Meta End-->
                              </div>
                              <!-- Job Bookmark Start -->
                              <div>
                                <i class="bi bi-bookmark text-muted"></i>
                              </div>
                              <!-- Job Bookmark End -->

                            </div>

                          </div>
                          <!--Job Listing Meta Start-->
                          <div>
                            <div class="mb-4">
                              <div class="mb-2 mb-md-0">
                                <div class="mt-1"><i class="fe fe-briefcase text-muted"></i>
                                  <span class="ms-1">0 - 5years</span>
                                </div>
                                <div class="mt-1">
                                  <i class="fe fe-dollar-sign text-muted"></i>
                                  <span class="ms-1">5k - 8k</span>
                                </div>
                                <div class="mt-1">
                                  <i class="fe fe-map-pin text-muted"></i>
                                  <span class="ms-1 ">{{$_->city . ', ' . $_->state}}</span>
                                </div>
                              </div>

                            </div>

                          </div>
                          <!--Job Listing Meta End-->

                        </div>
                      </div>
                      <!-- Job Grid End -->
                    </div>
                    @break
                  @case('firm')
                    <div class="card card-bordered  mb-4 card-hover cursor-pointer">
                      <!-- card body -->
                      <div class="card-body">
                        <div>
                          <div class="d-lg-flex">
                            <div class="mb-3 mb-lg-0">
                              <!-- Img -->
                              <img src="{{$_->avatar}}"
                                   alt="{{$_->fullName()}}" class="icon-shape border rounded-3 icon-xxl avatar-lg">
                            </div>
                            <!-- text -->
                            <div class="w-100 ms-lg-4">
                              <div class="d-flex justify-content-between mt-1">
                                <div>
                                  <!-- heading -->
                                  <h3 class="mb-1"><a href="company-about.html"
                                                      class="text-inherit">{{$_->firm_name}}</a>
                                  </h3>

                                  <div>
                                    <!-- star -->
                                    <span class="text-dark fw-medium">4.5 <i class="bi bi-star-fill text-warning"></i></span>
                                    <span class="ms-0 badge bg-primary-soft">131 Reviews</span>
                                  </div>

                                </div>
                                <div>
                                  <!-- button -->
                                  <a href="#" class="btn btn-outline-primary btn-sm">Follow</a>
                                </div>

                              </div>
                              <div>
                                <div class="mt-4">
                                  <!-- row -->
                                  <div class="row g-2">
                                    <!-- icon -->
                                    <div class="col-12 col-md-6">
                                      <div><span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                      fill="currentColor"
                                                      class="bi bi-clock-fill text-muted align-text-bottom"
                                                      viewBox="0 0 16 16">
                              <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                            </svg></span>
                                        <!-- icon -->
                                        <span class="ms-1">55 year old</span></div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                      <!-- icon -->
                                      <div> <span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                       fill="currentColor"
                                                       class="bi bi-geo-alt-fill text-muted align-text-bottom"
                                                       viewBox="0 0 16 16">
                              <path
                                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                            </svg></span>
                                        <span class="ms-1">Ahmedabad, Gujarat</span></div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                      <!-- icon -->
                                      <div><span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                      fill="currentColor"
                                                      class="bi bi-building  text-muted align-text-bottom"
                                                      viewBox="0 0 16 16">
                              <path fill-rule="evenodd"
                                    d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                              <path
                                d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                            </svg></span>
                                        <span class="ms-1">Public</span></div>
                                      <!-- icon -->
                                    </div>
                                    <div class="col-12 col-md-6">
                                      <div><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                      fill="currentColor"
                                                      class="bi bi-people-fill text-muted align-text-bottom"
                                                      viewBox="0 0 16 16">
                              <path
                                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                              <path fill-rule="evenodd"
                                    d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                              <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                            </svg></span>
                                        <span class="ms-1">745 Employees (India)</span></div>
                                    </div>
                                  </div>


                                  <div>
                                    <!-- text -->
                                    <div class="mt-3">
                                      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in
                                        velit
                                        mollis, pellentesque
                                        lorem a, faucibus leo. Praesent tempus id augue ut ullamcorper. Donec dignissim
                                        ante
                                        sed
                                        metus sagittis porta nec sed purus. </p>
                                    </div>


                                  </div>
                                </div>
                              </div>
                            </div>


                          </div>

                        </div>
                      </div>
                    </div>
                    @break
                @endswitch
              @empty
                <div class="text-center">
                  <h3 class="lead">We're working on a personalised legal directory</h3>
                  <h4>Run a search to find a legal professional</h4>
                </div>
              @endforelse
            </article>

            <footer>
              @if($directory->count())
                <nav aria-label="Page navigation example">
                  <ul class="pagination  mb-0">
                    <li class="page-item disabled">
                      <a class="page-link mx-1 rounded" href="#" tabindex="-1" aria-disabled="true"><i
                          class="mdi mdi-chevron-left"></i></a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link mx-1 rounded" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link mx-1 rounded" href="#">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link mx-1 rounded" href="#">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link mx-1 rounded" href="#"><i class="mdi mdi-chevron-right"></i></a>
                    </li>
                  </ul>
                </nav>
              @endif
            </footer>

          </section>

          @if($directory->count())
            <aside class="col-md-4 mt-4 mt-md-0">
              <div class="card border mb-6 mb-md-0 shadow-none">
                <header class="card-header">
                  <h4 class="mb-0 fs-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-filter text-muted me-2" viewBox="0 0 16 16">
                      <path
                        d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                    All Filters
                  </h4>
                </header>
                <article class="card-body py-3">
                  <a class="fs-5 text-dark fw-semi-bold" data-bs-toggle="collapse" href="#collapseExample" role="button"
                     aria-expanded="false" aria-controls="collapseExample">
                    Designations
                    <span class="float-end">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                         class="bi bi-chevron-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                  </svg>
                  </span>
                  </a>
                  <div class="collapse show" id="collapseExample">
                    <div class="mt-3">
                      <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckLocationOne">
                        <label class="form-check-label" for="flexCheckLocationOne">
                          Accountant <span class="text-muted">(4)</span>
                        </label>
                      </div>
                      <div class="form-check mb-2 ">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckLocationTwo " checked>
                        <label class="form-check-label" for="flexCheckLocationTwo ">
                          Executive Accountant <span class="text-muted">(8)</span>
                        </label>
                      </div>
                      <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckLocationThree ">
                        <label class="form-check-label" for="flexCheckLocationThree ">
                          Assistant Manger <span class="text-muted">(12)</span>
                        </label>
                      </div>
                      <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckLocationFour ">
                        <label class="form-check-label" for="flexCheckLocationFour ">
                          Software Developer <span class="text-muted">(23)</span>
                        </label>
                      </div>
                      <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckLocationFive ">
                        <label class="form-check-label" for="flexCheckLocationFive ">
                          HR Executive <span class="text-muted">(28)</span>
                        </label>
                      </div>

                    </div>
                  </div>

                </article>
                <article class="card-body border-top py-3">
                  <a class="fs-5 text-dark fw-semi-bold" data-bs-toggle="collapse" href="#collapseExampleSecond"
                     role="button" aria-expanded="false" aria-controls="collapseExampleSecond">
                    Locations <span class="float-end">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                         fill="currentColor" class="bi bi-chevron-down"
                         viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                  </svg>
                  </span>
                  </a>
                  <div class="collapse show" id="collapseExampleSecond">
                    <div class="mt-3">
                      <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckLocationOne">
                        <label class="form-check-label" for="flexCheckLocationOne">
                          Gujarat <span class="text-muted">(4)</span>
                        </label>
                      </div>
                      <div class="form-check mb-2 ">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckLocationTwo " checked>
                        <label class="form-check-label" for="flexCheckLocationTwo ">
                          Rajasthan <span class="text-muted">(6)</span>
                        </label>
                      </div>
                      <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckLocationThree ">
                        <label class="form-check-label" for="flexCheckLocationThree ">
                          Delhi <span class="text-muted">(5)</span>
                        </label>
                      </div>
                      <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckLocationFour ">
                        <label class="form-check-label" for="flexCheckLocationFour ">
                          Pune <span class="text-muted">(12)</span>
                        </label>
                      </div>
                      <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckLocationFive ">
                        <label class="form-check-label" for="flexCheckLocationFive ">
                          Kolkata <span class="text-muted">(8)</span>
                        </label>
                      </div>

                    </div>
                  </div>

                </article>

                <footer class="card-body py-3 d-grid">
                  <a href="#" class="btn btn-outline-secondary">
                    Clear Data
                  </a>
                </footer>
              </div>
            </aside>
          @endif
        </div>

      </div>
    </section>
  </main>

  @include('partials.footer')
@endsection