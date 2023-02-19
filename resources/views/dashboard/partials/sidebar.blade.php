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
        <span class="navbar-header">Subscription</span>
        <!-- List -->
        <ul class="list-unstyled ms-n2 mb-4">
          <!-- Nav item -->
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fe fe-credit-card nav-icon"></i>
              My Subscription
            </a>
          </li>

          <!-- Consultations -->
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fe fe-message-square nav-icon"></i>
              Consultations
            </a>
          </li>

          <!-- Forum -->
          <li class="nav-item">
            <a class="nav-link" href="#">
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

          <!-- Notifications -->
          <li class="nav-item">
            <a class="nav-link" href="notifications.html"><i class="fe fe-bell nav-icon"></i>Notifications</a>
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
          @if ($user->user_type !== 'client')
          <li class="nav-item">
            <a class="nav-link" href="profile-edit.html"><i class="bi bi-building nav-icon"></i>
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
            <a class="nav-link" href="{{ route('authenticate.logout') }}"><i class="fe fe-power nav-icon"></i>Sign
              Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>