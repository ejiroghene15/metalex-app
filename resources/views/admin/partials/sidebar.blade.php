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
        <a class="nav-link  " href="{{route('admin')}}">
          <i class="nav-icon fe fe-user me-2"></i> My Profile
        </a>
      </li>

      {{-- USERS--}}
      <li class="nav-item d-none">
        <a class="nav-link   collapsed " href="#"
           data-bs-toggle="collapse" data-bs-target="#navProfile" aria-expanded="false"
           aria-controls="navProfile">
          <i class="nav-icon fe fe-user me-2"></i> User
        </a>
        <div id="navProfile" class="collapse "
             data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link "
                 href="../../../pages/dashboard/admin-instructor.html">
                Instructor
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link "
                 href="../../../pages/dashboard/admin-students.html">Students</a>
            </li>
          </ul>
        </div>
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
      <li class="nav-item ">
        <a class="nav-link collapsed" href="#"
           data-bs-toggle="collapse" data-bs-target="#navUsers" aria-expanded="false" aria-controls="navCMS">
          <i class="nav-icon fe fe-users me-2"></i> Users
        </a>
        <div id="navUsers" class="collapse  "
             data-bs-parent="#sideNavbar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="#">Overview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Client</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Lawyer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Firms</a>
            </li>
          </ul>
        </div>
      </li>

      {{-- ACTIVITIES--}}
      <li class="nav-item">
        <a class="nav-link "
           href="../../../pages/dashboard/calendar.html">
          <i class="nav-icon fe fe-activity me-2"></i>
          Activities
        </a>
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

      {{-- EMAIL & CAMPAIGNS--}}
      <li class="nav-item">
        <a class="nav-link "
           href="../../../pages/dashboard/calendar.html">
          <i class="nav-icon fe fe-mail me-2"></i>
          Emails & Campaigns
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