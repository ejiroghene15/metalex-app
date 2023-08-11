<div class="header">
  <!-- navbar -->
  <nav class="navbar-default navbar navbar-expand-lg">
    <a id="nav-toggle" href="#">
      <i class="fe fe-menu"></i>
    </a>

    <!--Navbar nav -->
    <div class="ms-auto d-flex">
      <a href="#" class="form-check form-switch theme-switch btn btn-light btn-icon rounded-circle ">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
        <label class="form-check-label" for="flexSwitchCheckDefault"></label>
      </a>

      <ul class="navbar-nav navbar-right-wrap ms-2 d-flex nav-top-wrap">
        <li class="dropdown ms-2">
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
                <a class="dropdown-item" href="{{ route('user.dashboard', Str::slug($user->fullName())) }}">
                  <i class="mdi mdi-view-dashboard-outline me-2"></i>Dashboard
                </a>
              </li>
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
    </div>
  </nav>
</div>