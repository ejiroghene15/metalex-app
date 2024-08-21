@extends('layout.master')

@section('title', 'Coming Soon')

@section('body')
  <main>
    <section class="container d-flex flex-column">
      <div class="row">
        <div class="offset-xl-1 col-xl-2 col-lg-3 col-md-12 col-12">
          <div class="mt-4">
            <a href="{{route('home')}}">
              <img src="{{secure_asset('assets/images/brand/logo/metalex_full_logo.svg')}}" style="height: 25px"
                   alt="Logo" class="logo-inverse">
            </a>
            <!-- theme switch -->
            <div class="form-check form-switch theme-switch d-none ">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
              <label class="form-check-label" for="flexSwitchCheckDefault"></label>
            </div>
          </div>
        </div>
      </div>
      <div class="row align-items-center justify-content-center g-0 py-lg-22 py-10">
        <!-- Docs -->
        <div class="offset-xl-1 col-xl-5 col-lg-6 col-md-12 col-12 text-center text-lg-start">
          <h1 class="display-3 mb-2 fw-bold">Coming soon.</h1>

          <p class="mb-4 fs-4">Our directory is under development. Here, you'll be able to get access to top tier
            lawyers and law firms registered on the platform.</p>

          <div class="countdown">
            <ul class="list-inline">
              <li class="list-inline-item me-md-5">
                <span class="days display-4 fw-bold  text-primary">OO</span>
                <p class="fs-4 mb-0">Days</p>
              </li>
              <li class="list-inline-item me-md-5">
                <span class="hours display-4 fw-bold text-primary">OO</span>
                <p class="fs-4 mb-0">Hours</p>

              </li>
              <li class="list-inline-item me-md-5">
                <span class="minutes display-4 fw-bold text-primary ">OO</span>
                <p class="fs-4 mb-0">Minutes</p>

              </li>
              <li class="list-inline-item me-md-5">
                <span class="seconds display-4 fw-bold text-primary ">OO</span>
                <p class="fs-4 mb-0">Seconds</p>

              </li>
            </ul>
          </div>
          <hr class="my-4">
          <div>
            <h3 class="mb-3">Notify me when its’s ready.</h3>
            <form class="d-inline-flex justify-content-center justify-content-lg-start">
              <label class="visually-hidden" for="subscribeInput">Email</label>
              <input type="email" class="form-control mb-2 me-2" id="subscribeInput" placeholder="Your e-mail...">
              <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
            </form>
          </div>
        </div>
        <!-- img -->
        <div class="offset-xl-1 col-xl-5 col-lg-6 col-md-12 col-12 mt-8 mt-lg-0">
          <img src="{{secure_asset('assets/images/background/comingsoon.svg')}}" alt="" class="w-100"/>
        </div>
      </div>
      <div class="row">
        <div class="offset-xl-1 col-xl-10 col-lg-12 col-md-12 col-12">
          <div class="row align-items-center mt-6">
            <div class="col-md-6 col-8">
              {{--              <p class="mb-0">© Geeks. 2021 Codescandy.</p>--}}
              <span
                class="fs-6 fw-semi-bold"> &copy; {{ date('Y') . ' ' .config('app.name') }}, Inc. All Rights Reserved</span>
            </div>
            <div class="col-md-6 col-4 d-flex justify-content-end">
              <a href="https://www.facebook.com/metalexlegal" class="text-muted text-primary-hover me-3">
                <i class="mdi mdi-facebook mdi-24px"></i>
              </a>
              <a href="https://twitter.com/Metalex_legal" class="text-muted text-primary-hover me-3">
                <i class="mdi mdi-twitter mdi-24px"></i>
              </a>
              <a href="https://www.linkedin.com/company/metalex-legal/" class="text-muted text-primary-hover"><i
                  class="mdi mdi-linkedin mdi-24px"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection

@section('scripts')
  @parent
  <script src="{{secure_asset('assets/js/vendors/jquery.downCount.min.js')}}"></script>
  <script src="{{secure_asset('assets/js/vendors/countdown.js')}}"></script>
@endsection