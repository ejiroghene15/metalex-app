<nav class="navbar-vertical navbar navbar-dark">
  <div class="vh-100" data-simplebar>
    <!-- Brand logo -->
    <a class="navbar-brand" href="{{route('home')}}">
      <img src="{{ asset('assets/images/brand/logo/metalex_full_logo.svg') }}"
           style="object-position: -3px 0; height: 25px" alt="">
    </a>

    <!-- Navbar nav -->
    <ul class="navbar-nav flex-column" id="sideNavbar">
      <li class="nav-item">
        <a
          @class(['nav-link','active'=> $current_route === 'user.dashboard']) href="{{route('user.dashboard', Str::slug($user->fullName()))}}">
          <i class="nav-icon fe fe-home me-2"></i> Dashboard
        </a>
      </li>

      <li class="nav-item">
        <a
          @class(['nav-link','active'=>  in_array($current_route, ['user.profile', 'user.profile.edit']) ]) href="{{route('user.profile')}}">
          <i class="nav-icon fe fe-user me-2"></i> My Profile
        </a>
      </li>

      <li class="nav-item">
        <a
          @class(['nav-link','active'=> $current_route === 'user.bookmarks' ]) href="{{route('user.bookmarks')}}">
          <i class="nav-icon bi bi-bookmark-fill me-2"></i> Bookmarks
        </a>
      </li>

      {{-- CMS --}}
      <li class="nav-item ">
        <a class="nav-link collapsed" href="#"
           data-bs-toggle="collapse" data-bs-target="#navCMS" aria-expanded="false" aria-controls="navCMS">
          <i class="nav-icon fe fe-book-open me-2"></i> CMS
        </a>

        <div id="navCMS" class="collapse"
             data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">

            <li class="nav-item">
              <a class="nav-link"
                 href="{{route('user.blog')}}">
                All Post
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link"
                 href="{{route('user.blog.create')}}">
                New Post
              </a>
            </li>

          </ul>
        </div>
      </li>

      {{-- FORUM --}}
      <li class="nav-item ">
        <a class="nav-link collapsed" href="#"
           data-bs-toggle="collapse" data-bs-target="#navForum" aria-expanded="false" aria-controls="navCMS">
          <i class="nav-icon mdi mdi-forum me-2"></i> Forum
        </a>
        <div id="navForum" class="collapse  "
             data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="{{route('forum.all')}}">Overview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('cms')}}">Topics</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('cms')}}">Moderators</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('cms')}}">Flagged Content</a>
            </li>
          </ul>
        </div>
      </li>

      {{-- VIRTUAL OFFICE--}}
      <li class="nav-item">
        <a class="nav-link "
           href="../../../pages/dashboard/calendar.html">
          <i class="nav-icon mdi mdi-office-building-cog me-2"></i>
          Virtual Office
        </a>
      </li>

      {{-- NOTIFICATION--}}
      <li class="nav-item">
        <a class="nav-link "
           href="../../../pages/dashboard/calendar.html">
          <i class="nav-icon fe fe-bell me-2"></i>
          Notifications
        </a>
      </li>

      <li class="nav-item">
        <div class="nav-divider"></div>
      </li>

      <!-- Nav item -->
      <li class="nav-item">
        <div class="navbar-heading">Components</div>
      </li>


    </ul>

  </div>
</nav>