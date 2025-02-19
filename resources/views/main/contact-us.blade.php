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
      @include('main.page.home.contact-form')
    </div>
  </section>

  {{--  Additional Info--}}
  <section id="before-footer" class="mt-5">
    @include('main.contact-info-footer')
  </section>

  @include('main.partials.footer')
@endsection


