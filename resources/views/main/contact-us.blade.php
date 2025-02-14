@extends('layout.master')

@section('title', 'Contact Us')

@section('style')
  @parent
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@section('body')
  @include('main.partials.navbar')

  <section class="pt-3" id="news-jumbotron" style="height: 25vh !important; ">
    <div class="col-lg-9 mx-auto px-3 text-center">
      <h2 class="text-white" id="heading">Contact Us</h2>
    </div>
  </section>

  {{--  Contact--}}
  <section id="contact-us" class="py-7">
{{--    <h2 class="text-center title">--}}
{{--      <span class="color">Contact</span>--}}
{{--      <span>Us</span>--}}
{{--    </h2>--}}

    <div class="col-lg-11 mx-auto py-5 px-3" id="body">
      <div class="d-flex flex-wrap align-items-center gap-5">
        <div class="col-md-3 mx-auto" style="flex-basis: 384px">
          <img src="{{asset('assets/images/background/home/medium-shot-female-economist-working-office.svg')}}" class="img-fluid" alt="">
        </div>
        <div class="col">
          <header id="info">
            <h3>Get in touch with us.</h3>
            <p>Fill out the form below, and our team will get back to you as soon as possible.</p>
          </header>
          <form action="" id="form">
            <div class="d-flex gap-lg-5 gap-3">
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

  {{--  Additional Info--}}
  <section id="before-footer" class="mt-5">
    @include('main.contact-info-footer')
  </section>

  @include('main.partials.footer')
@endsection


