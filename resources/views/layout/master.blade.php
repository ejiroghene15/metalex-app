<!DOCTYPE html>
<html lang="en" style="height: 100%">
  @include('partials.head')

  <body class="d-flex flex-column h-100" id="body">
    @yield('body')
    @include('partials.scripts')
  </body>

</html>