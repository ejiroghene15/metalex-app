<!DOCTYPE html>
<html lang="en" style="height: 100%">
@include('partials.head')

<body class="d-flex flex-column h-100" id="body">
<!-- Google Tag Manager (noscript) -->
<noscript>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W4WTVJX2"
          height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
@yield('body')
@include('partials.scripts')
</body>

</html>