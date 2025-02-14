<nav class="navbar navbar-expand-lg navbar-default px-0 py-3 py-lg-4" id="mg-nav-def">
  <div class="container-lg px-xxl-12">
    <a class="navbar-brand me-0" href="{{route('home')}}">
      <img src="{{ asset('assets/images/brand/logo/metalex_full_logo.svg') }}" style="height: 20px; width: 125px"
           alt="">
    </a>
    <!-- Button -->
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-default"
            aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icon-bar top-bar mt-0"></span>
      <span class="icon-bar middle-bar"></span>
      <span class="icon-bar bottom-bar"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar-default">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a @class(['nav-link','active'=> $current_route === 'home']) aria-current="page"
             href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a @class(['nav-link','active'=> $current_route === 'main.about']) href="{{route('main.about')}}">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a @class(['nav-link dropdown-toggle','active'=> $current_route === 'main.subsidiaries']) href="#"
             role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Subsidiaries
          </a>
          <ul class="dropdown-menu">
            <li>
              <a style="padding-block: .8em;" class="dropdown-item fs-5" href="{{route('sub.academy')}}">Metalex
                Academy</a>
            </li>

            <li>
              <a style="padding-block: .8em;" class="dropdown-item fs-5" href="{{route('sub.tech')}}">Metalex
                Technologies</a>
            </li>

            <li>
              <a style="padding-block: .8em;" class="dropdown-item fs-5" href="{{route('sub.publications')}}">Metalex
                Publications</a>
            </li>

            <li>
              <a style="padding-block: .8em;" class="dropdown-item fs-5" href="{{route('sub.entertainment')}}">Metalex
                Entertainment</a>
            </li>

            <li>
              <a style="padding-block: .8em;" class="dropdown-item fs-5" href="{{route('sub.legal')}}">Metalex Legal</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a @class(['nav-link','active'=> $current_route === 'main.news']) href="{{route('main.news')}}">
            News & Updates
          </a>
        </li>
        <li class="nav-item">
          <a @class(['nav-link','active'=> $current_route === 'main.careers']) href="{{route('main.careers')}}">
            Careers
          </a>
        </li>
        <li class="nav-item">
          <a @class(['nav-link','active'=> $current_route === 'main.faq']) href="{{route('main.faq')}}">FAQ</a>
        </li>
      </ul>

      <div class=" d-flex align-items-center mt-2 mt-md-0 pt-2 py-lg-0">
        <a href="{{ route('main.contact-us') }}" class="btn text-white" style="border-radius: 12px; background-color: #6A1B9A">Contact
          Us</a>

        <a href="#" class="form-check form-switch theme-switch btn btn-light btn-icon rounded-circle d-none">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault"/>
          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
        </a>
      </div>
    </div>

  </div>
</nav>
