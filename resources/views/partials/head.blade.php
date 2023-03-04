<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="law, legal tech">
  {{--
  <meta name="author" content="Codescandy"> --}}

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/metalex_ico.png') }}">

  @section('style')
  <!-- Libs CSS -->
  <link href="{{ asset('assets/fonts/feather/feather.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">

  {{-- Custom Css --}}
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  @show

  <title>Metalex | @yield('title')</title>
</head>