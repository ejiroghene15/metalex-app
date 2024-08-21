<!DOCTYPE html>
<html lang="en">
@include('user.partials.head')

<body>
<main id="db-wrapper">
  @include('user.partials.sidebar')
  <section id="page-content">
    @include('user.partials.nav')

    {{-- alert display section --}}
    <div id="alert">
      @if (session('message'))
        <x-alert :status="session('status')" :message="session('message')" :/>
      @endif

      @if(!$user->is_verified)
          <x-alert status="warning" message="Your account has not been verified go to your profile to resend verification link" :/>
      @endif
    </div>

    @yield('body')
  </section>
</main>

@include('user.partials.scripts')
</body>

</html>