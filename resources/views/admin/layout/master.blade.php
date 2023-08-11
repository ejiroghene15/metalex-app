<!DOCTYPE html>
<html lang="en">
@include('admin.partials.head')

<body>
<main id="db-wrapper">
  @include('admin.partials.sidebar')
  <section id="page-content">
    @include('admin.partials.nav')

    {{-- alert display section --}}
    <div id="alert">
      @if (session('message'))
        <x-alert :status="session('status')" :message="session('message')" :/>
      @endif
    </div>

    @yield('body')
  </section>
</main>

@include('admin.partials.scripts')
</body>

</html>