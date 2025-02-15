@section('scripts')
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
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script>
    toastr.options.timeOut = 0;
    toastr.options.extendedTimeOut = 0;
  </script>

@show
