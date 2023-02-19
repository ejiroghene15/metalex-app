@extends('layout.master')

@section('title', 'Home')

@section('style')
@parent
<link rel="stylesheet" href="{{ asset('assets/libs/tiny-slider/dist/tiny-slider.css') }}">
@endsection

@auth
@include('dashboard.index')
@endauth

@guest
@include('guest.index')
@endguest

<!-- Scripts -->
@section('scripts')
@parent
<script src="{{ asset('assets/libs/tiny-slider/dist/min/tiny-slider.js')}}"></script>
<script src="{{ asset('assets/libs/@popperjs/core/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('assets/libs/tippy.js/dist/tippy-bundle.umd.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/tnsSlider.js') }}"></script>
<script src="{{ asset('assets/js/vendors/tooltip.js') }}"></script>
@endsection
