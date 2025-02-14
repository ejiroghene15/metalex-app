<nav class="navbar navbar-expand-lg navbar-default py-3">
  <div class="container-fluid px-0">
    <a class="navbar-brand me-lg-6" href="{{ route('home') }}">
      <img src="{{ asset('assets/images/brand/logo/metalex_full_logo.svg') }}" style="height: 25px" alt="">
    </a>

    @auth
      {{--MOBILE VIEW NAV AREA--}}
      <ul class="navbar-nav navbar-right-wrap ms-auto d-lg-none d-flex nav-top-wrap">
        @include('partials.auth-navbar')
      </ul>
    @endauth

    <!-- Button -->
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-default"
            aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icon-bar top-bar mt-0"></span>
      <span class="icon-bar middle-bar"></span>
      <span class="icon-bar bottom-bar"></span>
    </button>

    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="navbar-default">
      <ul class="navbar-nav mt-4 mt-lg-0">
        <li class="nav-item me-3">
          <a
            @class(['nav-link rounded-2 py-2 px-3','text-bg-light-primary text-primary'=> $current_route === 'home']) href="{{route('home')}}">
            <i class="fe fe-home me-1"></i> Home
          </a>
        </li>

        <li class="nav-item me-3 d-none">
          <a
            @class(['nav-link rounded-2 py-2 px-3','text-bg-light-primary text-primary'=> $current_route === 'services']) href="{{route('services')}}">
            <i class="bi bi-briefcase me-1"></i> Services
          </a>
        </li>

        <li class="nav-item me-3">
          <a
            @class(['nav-link rounded-2 py-2 px-3','text-bg-light-primary text-primary'=> $current_route === 'directory']) href="{{route('directory')}}">
            <i class="fe fe-folder me-1"></i> Directory
          </a>
        </li>

        <li class="nav-item me-3">
          <a
            @class(['nav-link rounded-2 py-2 px-3','text-bg-light-primary text-primary'=> in_array($current_route, ['p.articles', 'p.magazines', 'p.category', 'full-article', 'single-category'])]) href="{{route('p.articles')}}">
            <i class="bi bi-book me-1"></i>
            <span>Publications</span>
          </a>
        </li>

        <li class="nav-item me-3">
          <a
            @class(['nav-link rounded-2 py-2 px-3','text-bg-light-primary text-primary' => in_array($current_route, ['forums', 'forum.topics', 'forum.thread'])]) href="{{route('forums')}}">
            <i class="bi bi-chat-square-quote me-1"></i> Forum
          </a>
        </li>

        <li class="nav-item me-3">
          <a
            @class(['nav-link rounded-2 py-2 px-3','text-bg-light-primary text-primary'=> $current_route === 'main.about']) href="{{route('main.about')}}">
            <i class="bi bi-info me-1"></i>About Us
          </a>
        </li>

      </ul>

      <div class="ms-auto d-flex align-items-center mt-2 mt-md-0 pt-2 py-lg-0">
        <a href="#" class="form-check form-switch theme-switch btn btn-light btn-icon rounded-circle">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault"/>
          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
        </a>

        @guest
          <a href="{{ route('login') }}" class="btn btn-white shadow-sm mx-2">Sign In</a>
          <a href="{{ route('register') }}" class="btn btn-success">Sign Up</a>
        @endguest

        @auth
          {{-- Sign Out Button--}}
          {{--          <a href="{{ route('auth.logout') }}" class="d-lg-none d-inline-block btn bg-danger-soft ms-3">Logout</a>--}}
          <ul class="navbar-nav navbar-right-wrap ms-2 d-none d-lg-block">
            @include('partials.auth-navbar')
          </ul>
        @endauth

      </div>
    </div>
  </div>
</nav>