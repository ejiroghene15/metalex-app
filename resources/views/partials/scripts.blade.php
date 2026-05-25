@section('scripts')
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
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script>
    toastr.options.timeOut = 0;
    toastr.options.extendedTimeOut = 0;
  </script>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-86PXHPMKSB"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-86PXHPMKSB');
  </script>

  <script>
    $("#contact-us-form").submit(function (e) {
      e.preventDefault();

      let _this = $(this);
      const data = _this.serializeArray();

      grecaptcha.ready(function () {
        grecaptcha.execute('{{config('app.google_captcha_site_key')}}', {action: 'submit'}).then(function (token) {
          data.push({name: 'captcha', value: token})
          $.post('{{route('api.send-contact-mail')}}', data).then(function (response) {
            if (response.status === 'success') {
              toastr.success("", "Your Message has been sent");
              _this[0].reset();
            }
          })
        });
      });
    })
  </script>

@show
