@extends('layout.master')

@section('title', 'Home')

@section('style')
  @parent
  <link rel="stylesheet" href="{{ asset('assets/libs/tiny-slider/dist/tiny-slider.css') }}">
@endsection

@section('body')
  @include('partials.navbar')

  @auth
    @include('dashboard.index')
  @endauth

  @guest
    @include('guest.index')
  @endguest

  @include('partials.footer')
@endsection

<!-- Scripts -->
@section('scripts')
  @parent
  <script src="{{ asset('assets/libs/tiny-slider/dist/min/tiny-slider.js')}}"></script>
  <script src="{{ asset('assets/js/vendors/tnsSlider.js') }}"></script>
@endsection
