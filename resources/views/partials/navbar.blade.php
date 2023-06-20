<nav class="navbar navbar-expand-lg navbar-default py-3">
  <div class="container-fluid px-0">
    <a class="navbar-brand me-lg-6" href="{{ route('home') }}">
      <img src="{{ asset('assets/images/brand/logo/metalex_full_logo.svg') }}" style="height: 25px" alt="">
    </a>

    @auth
      <!-- Mobile view nav wrap -->
      <ul class="navbar-nav navbar-right-wrap ms-auto d-lg-none d-flex nav-top-wrap">
        <li class="dropdown ms-2">
          <a class="rounded-circle" href="#" role="button" data-bs-toggle="dropdown">
            <div class="avatar avatar-md avatar-indicators avatar-online">
              <img alt="avatar" src="{{ $user->avatar }}" class="rounded-circle"/>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-end shadow">
            <div class="dropdown-item">
              <div class="d-flex">
                <div class="avatar avatar-md avatar-indicators avatar-online">
                  <img alt="avatar" src="{{ $user->avatar }}" class="rounded-circle"/>
                </div>
                <div class="ms-3 lh-1">
                  <h5 class="mb-1">{{ $user->first_name . ' ' . $user->last_name}}</h5>
                  <p class="mb-0 text-muted">{{ $user->email }}</p>
                </div>
              </div>
            </div>
            <div class="dropdown-divider"></div>
            <ul class="list-unstyled">
              <li>
                <a class="dropdown-item" href="{{ route('user.profile') }}">
                  <i class="fe fe-user me-2"></i>Profile
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="./pages/student-subscriptions.html">
                  <i class="fe fe-star me-2"></i>Subscription
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <i class="fe fe-settings me-2"></i>Settings
                </a>
              </li>
            </ul>
            <div class="dropdown-divider"></div>
            <ul class="list-unstyled">
              <li>
                <a class="dropdown-item" href="./index.html">
                  <i class="fe fe-power me-2"></i>Sign Out
                </a>
              </li>
            </ul>
          </div>
        </li>
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
            @class(['nav-link rounded-2 py-2 px-3','text-bg-light-primary text-primary'=> Route::currentRouteName() === 'home']) href="{{route('home')}}">
            <i class="fe fe-home me-1"></i> Home
          </a>
        </li>

        <li class="nav-item me-3">
          <a
            @class(['nav-link rounded-2 py-2 px-3','text-bg-light-primary text-primary'=> Route::currentRouteName() === 'find-lawyer']) href="{{route('find-lawyer')}}">
            <i class="fe fe-users me-1"></i> Consult a Lawyer
          </a>
        </li>

        <li class="nav-item me-3">
          <a
            @class(['nav-link rounded-2 py-2 px-3','text-bg-light-primary text-primary'=> Route::currentRouteName() === 'articles']) href="{{route('articles')}}">
            <i class="bi bi-book me-1"></i>
            <span>Articles</span>
          </a>
        </li>

        <li class="nav-item me-3">
          <a
            @class(['nav-link rounded-2 py-2 px-3','text-bg-light-primary text-primary' => in_array(Route::currentRouteName(), ['forums', 'forum.topics', 'forum.thread'])]) href="{{route('forums')}}">
            <i class="bi bi-chat-square-dots me-1"></i> Forum
          </a>
        </li>

        <li class="nav-item me-3">
          <a
            @class(['nav-link rounded-2 py-2 px-3','text-bg-light-primary text-primary'=> Route::currentRouteName() === 'about']) href="{{route('about')}}">
            <i class="bi bi-info me-1"></i>About Us
          </a>
        </li>

      </ul>

      <div class="ms-auto d-flex align-items-center mt-2 mt-md-0">
        <a href="#" class="form-check form-switch theme-switch btn btn-light btn-icon rounded-circle">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault"/>
          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
        </a>

        @guest
          <a href="{{ route('login') }}" class="btn btn-white shadow-sm mx-2">Sign In</a>
          <a href="{{ route('register') }}" class="btn btn-success">Sign Up</a>
        @endguest

        @auth
          <ul class="navbar-nav navbar-right-wrap ms-2 d-none d-lg-block">
            <li class="dropdown ms-2 d-inline-block">
              <a class="rounded-circle" href="#" data-bs-toggle="dropdown" data-bs-display="static"
                 aria-expanded="false">
                <div class="avatar avatar-md avatar-indicators avatar-online">
                  <img alt="avatar" src="{{ $user->avatar }}" class="rounded-circle"/>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <div class="dropdown-item">
                  <div class="d-flex">
                    <div class="avatar avatar-md avatar-indicators avatar-online">
                      <img alt="avatar" src="{{ $user->avatar }}" class="rounded-circle"/>
                    </div>
                    <div class="ms-3 lh-1">
                      <h5 class="mb-1">{{ $user->first_name . ' ' . $user->last_name}}</h5>
                      <p class="mb-0 text-muted">{{ $user->email }}</p>
                    </div>
                  </div>
                </div>
                <div class="dropdown-divider"></div>
                <ul class="list-unstyled">
                  <li>
                    <a class="dropdown-item" href="{{ route('user.profile') }}">
                      <i class="fe fe-user me-2"></i>Profile
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./pages/student-subscriptions.html">
                      <i class="fe fe-star me-2"></i>Subscription
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="fe fe-settings me-2"></i>Settings
                    </a>
                  </li>
                </ul>
                <div class="dropdown-divider"></div>
                <ul class="list-unstyled">
                  <li>
                    <a class="dropdown-item" href="{{ route('auth.logout') }}">
                      <i class="fe fe-power me-2"></i>Sign Out
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        @endauth

      </div>
    </div>
  </div>
</nav>