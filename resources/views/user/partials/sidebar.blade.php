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
              <a class="nav-link" href="{{route('my-forum-topics')}}">My Topics</a>
            </li>

          </ul>
        </div>
      </li>

      {{-- LOGOUT--}}
      <li class="nav-item">
        <a class="nav-link "
           href="{{route('auth.logout')}}">
          <i class="nav-icon mdi mdi-logout me-2"></i>
          Sign Out
        </a>
      </li>
    </ul>

  </div>
</nav>