<div class="col-lg-3 col-md-4 col-12">
  <!-- Side navbar -->
  <nav class="navbar navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 sidenav">
    <!-- Menu -->
    <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="#">Menu</a>
    <!-- Button -->
    <button class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light" type="button"
      data-bs-toggle="collapse" data-bs-target="#sidenav" aria-controls="sidenav" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="fe fe-menu"></span>
    </button>
    <!-- Collapse navbar -->
    <div class="collapse navbar-collapse" id="sidenav">
      <div class="navbar-nav flex-column">
        <span class="navbar-header">Dashboard</span>
        <!-- List -->
        <ul class="list-unstyled ms-n2 mb-4">
          <!-- Nav item -->
          <li class="nav-item d-none">
            <a class="nav-link" href="#">
              <i class="fe fe-credit-card nav-icon"></i>
              My Subscription
            </a>
          </li>

          <!-- Consultations -->
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fe fe-message-square nav-icon"></i>
              Consultation
            </a>
          </li>

          @if ($user->user_type === 'firm')
            <!-- Associates -->
            <li @class(['nav-item','active'=> Route::currentRouteName() === 'office.associates'])>
              <a class="nav-link" href="{{ route('office.associates') }}"><i
                  class="fe fe-users nav-icon"></i>Associates</a>
            </li>
          @endif

          <!-- Forum -->
          <li @class(['nav-item','active'=> Route::currentRouteName() === 'dashboard.forums'])>
            <a class="nav-link" href="{{route('dashboard.forums')}}">
              <i class="fe fe-rss nav-icon"></i>
              Forum
            </a>
          </li>

          <!-- Library -->
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fe fe-book nav-icon"></i>
              Library
            </a>
          </li>

          @if ($user->user_type === 'lawyer')
            <!-- Associates -->
            <li @class(['nav-item','active'=> Route::currentRouteName() === 'office.certificates'])>
              <a class="nav-link" href="{{ route('office.certificates') }}">
                <i class="fe fe-award nav-icon"></i>Certifications
              </a>
            </li>
          @endif


          <!-- Notifications -->
          <li class="nav-item">
            <a class="nav-link" href="notifications.html"><i class="fe fe-mail nav-icon"></i>Inbox</a>
          </li>


        </ul>
        <span class="navbar-header">Account Settings</span>
        <!-- List -->
        <ul class="list-unstyled ms-n2 mb-0">
          <!-- Profile menu -->
          <li @class(['nav-item','active'=> Route::currentRouteName() === 'user.profile'])>
            <a class="nav-link" href="{{ route('user.profile') }}"><i class="fe fe-user nav-icon"></i>Edit
              Profile</a>
          </li>

          <!-- Virtual office profile -->
          @if ($user->is_verified && $user->user_type !== 'client')
            <li @class(['nav-item','active'=> Route::currentRouteName() === 'office.profile'])>
              <a class="nav-link" href="{{ route('office.profile') }}"><i class="bi bi-building nav-icon"></i>
                Office Profile
              </a>
            </li>
          @endif

          <!-- Nav item -->
          <li class="nav-item">
            <a class="nav-link" href="security.html"><i class="fe fe-shield nav-icon"></i>Security</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="notifications.html"><i class="fe fe-bell nav-icon"></i>Notifications</a>
          </li>

          <!-- Nav item -->
          <li class="nav-item">
            <a class="nav-link" href="profile-privacy.html"><i class="fe fe-lock nav-icon"></i>Profile
              Privacy</a>
          </li>

          <!-- Nav item -->
          <li class="nav-item">
            <a class="nav-link" href="delete-profile.html"><i class="fe fe-trash nav-icon"></i>Delete
              Profile</a>
          </li>

          <!-- Nav item -->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('auth.logout') }}"><i class="fe fe-power nav-icon"></i>Sign
              Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>