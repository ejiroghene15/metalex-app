@extends('layout.master')

@section('title', 'Home')

@section('meta-tags')
  @parent
  <meta name="google-adsense-account" content="ca-pub-5480611429669515">
@endsection

@section('style')
  @parent
  <link rel="stylesheet" href="{{ asset('assets/libs/tiny-slider/dist/tiny-slider.css') }}">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5480611429669515"
          crossorigin="anonymous"></script>
@endsection

@section('body')
  @include('partials.navbar')

  {{--  @auth--}}
  {{--    @include('dashboard.index')--}}
  {{--  @endauth--}}

  {{--  @guest--}}
  {{--  This is the general home paage--}}
  @include('guest.index')
  {{--  @endguest--}}

  @include('partials.footer')
@endsection

<!-- Scripts -->
@section('scripts')
  @parent
  <script src="{{ asset('assets/libs/tiny-slider/dist/min/tiny-slider.js')}}"></script>
  <script src="{{ asset('assets/js/vendors/tnsSlider.js') }}"></script>
@endsection
