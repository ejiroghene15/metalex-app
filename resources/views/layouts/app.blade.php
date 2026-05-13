<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name=”robots” content="index, follow">
  @yield('meta-tags')

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/metalex_ico.png') }}">
  <!-- Libs CSS -->
  <link href="{{ asset('assets/fonts/feather/feather.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet"/>
  <link href="{{ asset('assets/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet"/>
  <link href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">

  {{-- Custom Css --}}
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <title>{{config('app.name')}} | @yield('title')</title>

  @stack('styles')

{{--  @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
  @livewireStyles
</head>

<body>
{{ $slot }}


<livewire:pages::components.alert/>
<script src="https://www.google.com/recaptcha/api.js?render={{config('app.google_captcha_site_key')}}"></script>

<!-- Libs JS -->
<script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>

<!-- Theme JS -->
<script src="{{ asset('assets/js/theme.min.js') }}"></script>

<script src="{{ asset('assets/libs/@popperjs/core/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('assets/libs/tippy.js/dist/tippy-bundle.umd.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/tooltip.js') }}"></script>

{{-- Custom --}}
<script src="https://kit.fontawesome.com/eb6289f81b.js" crossorigin="anonymous"></script>

@stack('scripts')
@livewireScripts
</body>
</html>
