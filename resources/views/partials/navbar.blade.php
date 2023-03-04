<nav class="navbar navbar-expand-lg navbar-default">
  <div class="container-fluid px-0">
    <a class="navbar-brand" href="{{ route('home') }}">
      <img src="{{ asset('assets/images/brand/logo/metalex_full_logo.svg') }}" style="height: 25px" alt="">
    </a>

    @auth
    <!-- Mobile view nav wrap -->
    <ul class="navbar-nav navbar-right-wrap ms-auto d-lg-none d-flex nav-top-wrap">
      <li class="dropdown stopevent">
        <a class="btn btn-light btn-icon rounded-circle text-muted indicator indicator-primary" href="#" role="button"
          data-bs-toggle="dropdown">
          <i class="fe fe-bell"> </i>
        </a>
        <div class="dropdown-menu dropdown-menu-end shadow">
          <div>
            <div class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center">
              <span class="h5 mb-0">Notifications</span>
              <a href="# " class="text-muted"><span class="align-middle"><i class="fe fe-settings me-1"></i></span></a>
            </div>
            <ul class="list-group list-group-flush" style="height: 300px" data-simplebar>
              <li class="list-group-item bg-light">
                <div class="row">
                  <div class="col">
                    <a href="#" class="text-body">
                      <div class="d-flex">
                        <img src="{{ $user->avatar }}" alt="" class="avatar-md rounded-circle" />
                        <div class="ms-3">
                          <h5 class="fw-bold mb-1">Kristin Watson:</h5>
                          <p class="mb-3 text-body">
                            Krisitn Watsan like your comment on course
                            Javascript Introduction!
                          </p>
                          <span class="fs-6 text-muted">
                            <span><span class="fe fe-thumbs-up text-success me-1"></span>2 hours ago,</span>
                            <span class="ms-1">2:19 PM</span>
                          </span>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-auto text-center me-2">
                    <a href="#" class="badge-dot bg-info" data-bs-toggle="tooltip" data-bs-placement="top"
                      title="Mark as read">
                    </a>
                    <div>
                      <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove">
                        <i class="fe fe-x text-muted"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>

            </ul>
            <div class="border-top px-3 pt-3 pb-0">
              <a href="./pages/notification-history.html" class="text-link fw-semi-bold">See all Notifications</a>
            </div>
          </div>
        </div>
      </li>

      <li class="dropdown ms-2">
        <a class="rounded-circle" href="#" role="button" data-bs-toggle="dropdown">
          <div class="avatar avatar-md avatar-indicators avatar-online">
            <img alt="avatar" src="{{ $user->avatar }}" class="rounded-circle" />
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end shadow">
          <div class="dropdown-item">
            <div class="d-flex">
              <div class="avatar avatar-md avatar-indicators avatar-online">
                <img alt="avatar" src="{{ $user->avatar }}" class="rounded-circle" />
              </div>
              <div class="ms-3 lh-1">
                <h5 class="mb-1">{{ $user->first_name . ' ' . $user->last_name}}</h5>
                <p class="mb-0 text-muted">{{ $user->email }}</p>
              </div>
            </div>
          </div>
          <div class="dropdown-divider"></div>
          <ul class="list-unstyled">
            <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                <i class="fe fe-circle me-2"></i>Status
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="#">
                    <span class="badge-dot bg-success me-2"></span>Online
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                    <span class="badge-dot bg-secondary me-2"></span>Offline
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                    <span class="badge-dot bg-warning me-2"></span>Away
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                    <span class="badge-dot bg-danger me-2"></span>Busy
                  </a>
                </li>
              </ul>
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
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">
            Consult A Lawyer
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            E-Library
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            Forum
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            About Us
          </a>
        </li>

      </ul>

      <div class="ms-auto d-flex align-items-center mt-2 mt-md-0">
        <a href="#" class="form-check form-switch theme-switch btn btn-light btn-icon rounded-circle">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
        </a>

        @guest
        <a href="{{ route('login') }}" class="btn btn-white shadow-sm mx-2">Sign In</a>
        <a href="{{ route('register') }}" class="btn btn-primary">Sign Up</a>
        @endguest

        @auth
        <ul class="navbar-nav navbar-right-wrap ms-2 d-none d-lg-block">
          {{-- Notification --}}
          <li class="dropdown d-inline-block stopevent">
            <a class="btn btn-light btn-icon rounded-circle text-muted indicator indicator-primary" href="#"
              role="button" id="dropdownNotificationSecond" data-bs-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <i class="fe fe-bell"> </i>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg" aria-labelledby="dropdownNotificationSecond">
              <div>
                <div class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center">
                  <span class="h5 mb-0">Notifications</span>
                  <a href="# " class="text-muted"><span class="align-middle"><i
                        class="fe fe-settings me-1"></i></span></a>
                </div>
                <ul class="list-group list-group-flush" style="height: 300px" data-simplebar>
                  <li class="list-group-item bg-light">
                    <div class="row">
                      <div class="col">
                        <a class="text-body" href="#">
                          <div class="d-flex">
                            <img src="{{ $user->avatar }}" alt="" class="avatar-md rounded-circle" />
                            <div class="ms-3">
                              <h5 class="fw-bold mb-1">
                                Kristin Watson:
                              </h5>
                              <p class="mb-3 text-body">
                                Krisitn Watsan like your comment on course
                                Javascript Introduction!
                              </p>
                              <span class="fs-6 text-muted">
                                <span><span class="fe fe-thumbs-up text-success me-1"></span>2 hours ago,</span>
                                <span class="ms-1">2:19 PM</span>
                              </span>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="col-auto text-center me-2">
                        <a href="#" class="badge-dot bg-info" data-bs-toggle="tooltip" data-bs-placement="top"
                          title="Mark as read">
                        </a>
                        <div>
                          <a href="#" class="bg-transparent" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Remove">
                            <i class="fe fe-x text-muted"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>

                </ul>
                <div class="border-top px-3 pt-3 pb-0">
                  <a href="./pages/notification-history.html" class="text-link fw-semi-bold">See all Notifications</a>
                </div>
              </div>
            </div>
          </li>

          <li class="dropdown ms-2 d-inline-block">
            <a class="rounded-circle" href="#" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
              <div class="avatar avatar-md avatar-indicators avatar-online">
                <img alt="avatar" src="{{ $user->avatar }}" class="rounded-circle" />
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
              <div class="dropdown-item">
                <div class="d-flex">
                  <div class="avatar avatar-md avatar-indicators avatar-online">
                    <img alt="avatar" src="{{ $user->avatar }}" class="rounded-circle" />
                  </div>
                  <div class="ms-3 lh-1">
                    <h5 class="mb-1">{{ $user->first_name . ' ' . $user->last_name}}</h5>
                    <p class="mb-0 text-muted">{{ $user->email }}</p>
                  </div>
                </div>
              </div>
              <div class="dropdown-divider"></div>
              <ul class="list-unstyled">
                <li class="dropdown-submenu dropstart-lg">
                  <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                    <i class="fe fe-circle me-2"></i>Status
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="badge-dot bg-success me-2"></span>Online
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="badge-dot bg-secondary me-2"></span>Offline
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="badge-dot bg-warning me-2"></span>Away
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="badge-dot bg-danger me-2"></span>Busy
                      </a>
                    </li>
                  </ul>
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
                  <a class="dropdown-item" href="{{ route('authenticate.logout') }}">
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