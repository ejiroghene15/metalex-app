<!DOCTYPE html>
<html lang="en">
@include('partials.dashboard.head')

<body>
<main id="db-wrapper">
  @include('partials.dashboard.sidebar')
  <section id="page-content">
    @include('partials.dashboard.nav')

    {{-- alert display section --}}
    <div id="alert">
      @if (session('message'))
        <x-alert :status="session('status')" :message="session('message')" :/>
      @endif


      {{--        @if(!$user->is_verified)--}}
      {{--          <x-alert status="warning" message="Your account has not been verified go to your profile to resend verification link" :/>--}}
      {{--        @endif--}}
    </div>

    {{$slot}}
  </section>
</main>

@include('partials.dashboard.scripts')
</body>

</html>