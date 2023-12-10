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
        <a class="nav-link  " href="{{route('admin')}}">
          <i class="nav-icon fe fe-home me-2"></i> Dashboard
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.dashboard', Str::slug($user->fullName())) }}">
          <i class="nav-icon fe fe-user me-2"></i> User Dashboard
        </a>
      </li>

      {{-- ACTIVITIES--}}
      <li class="nav-item">
        <a class="nav-link "
           href="{{route('view-activities')}}">
          <i class="nav-icon fe fe-activity me-2"></i>
          Activities
        </a>
      </li>

      {{-- CMS --}}
      <li class="nav-item ">
        <a class="nav-link collapsed" href="#"
           data-bs-toggle="collapse" data-bs-target="#navCMS" aria-expanded="false" aria-controls="navCMS">
          <i class="nav-icon fe fe-book-open me-2"></i> CMS
        </a>
        <div id="navCMS" class="collapse  "
             data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link   "
                 href="{{route('cms')}}">
                Overview
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link  "
                 href="{{route('cms.post')}}">
                All Post
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link "
                 href="{{route('cms.post.create')}}">
                New Post
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link "
                 href="{{route('cms.category')}}">
                Category
              </a>
            </li>
          </ul>
        </div>
      </li>

      {{-- MAGAZINE --}}
      <li class="nav-item ">
        <a class="nav-link collapsed" href="#"
           data-bs-toggle="collapse" data-bs-target="#navMag" aria-expanded="false" aria-controls="navCMS">
          <i class="nav-icon fe fe-book-open me-2"></i> Magazine
        </a>
        <div id="navMag" class="collapse  "
             data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link   "
                 href="{{route('magazine.list')}}">
                All Magazines
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link  "
                 href="{{route('magazine.create')}}">
                Upload Magazine
              </a>
            </li>
          </ul>
        </div>
      </li>

      {{-- FORUM --}}
      <li class="nav-item d-none">
        <a class="nav-link collapsed" href="#"
           data-bs-toggle="collapse" data-bs-target="#navForum" aria-expanded="false" aria-controls="navCMS">
          <i class="nav-icon mdi mdi-forum me-2"></i> Forum
        </a>
        <div id="navForum" class="collapse  "
             data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="{{route('cms')}}">Overview</a>
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

      {{-- USERS --}}
      <li class="nav-item">
        <a class="nav-link "
           href="{{route('view-users')}}">
          <i class="nav-icon fe fe-users me-2"></i>
          Users
        </a>
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