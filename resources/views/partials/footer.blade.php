<div class="mt-md-12 bg-white"></div>
<footer class="pt-lg-10 pt-5 footer bg-white mt-auto">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-12">
        <!-- about company -->
        <div class="mb-4">
          <img src="{{ asset('assets/images/brand/logo/metalex_full_logo.svg') }}"
               style="object-position: -2px 0; height: 30px" alt="metalex">
          <div class="mt-4">
            <p>
              Our flexible and hybrid work systems allows us to seamlessly and effectively deliver our professional
              legal services, both remotely; via our virtual workspace and in-person; at any of our physical offices in
              Nigeria.
            </p>
          </div>
        </div>
      </div>
      <div class="offset-lg-1 col-lg-2 col-md-3 col-6">
        <div class="mb-4">
          <!-- list -->
          <h3 class="fw-bold mb-3">Company</h3>
          <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
            <li><a href="{{route('about')}}" class="nav-link fw-semi-bold">About Us</a></li>
            <li><a href="#" class="nav-link fw-semi-bold">Services</a></li>
            <li><a href="{{route('p.articles')}}" class="nav-link fw-semi-bold">Articles</a></li>
            <li><a href="{{route('forums')}}" class="nav-link fw-semi-bold">Forum</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-6">
        <div class="mb-4">
          <!-- list -->
          <h3 class="fw-bold mb-3">Support</h3>
          <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
            <li><a href="#" class="nav-link fw-semi-bold">Help and Support</a></li>
            <li><a href="#" class="nav-link fw-semi-bold">Become an Editor</a></li>
            <li><a href="#" class="nav-link fw-semi-bold">FAQ’s</a></li>
          </ul>

        </div>
      </div>
      <div class="col-lg-3 col-md-12">
        <!-- contact info -->
        <div class="mb-4">
          <h3 class="fw-bold mb-3">Get in touch</h3>
          <p hidden>...</p>
          <p class="mb-1 d-flex align-items-center gap-2 fs-5">
            <i class="fe fe-mail"></i>
            <a href="mailto:hello@metalexlegal.com" class="text-muted">hello@metalexlegal.com</a>
          </p>
          <!-- social media -->
          <p class="fs-3 ">
            <a href="https://www.facebook.com/metalexlegal" target="_blank"
               class="bi bi-facebook  text-dark-info me-2"></a>
            <a href="https://twitter.com/Metalex_legal" class="bi bi-twitter text-info me-2"></a>
            <a href="https://www.linkedin.com/company/metalex-legal/" target="_blank"
               class="bi bi-linkedin text-muted "></a>
          </p>
          <p hidden>Phone: <span class="text-dark fw-semi-bold">(000) 123 456 789</span></p>

        </div>
      </div>
    </div>
    <div class="row align-items-center g-0 border-top py-2 mt-3 ">
      <!-- Desc -->
      <div class="col-lg-4 col-md-5 col-12">
        <span class="fs-6 fw-semi-bold"> &COPY; {{ date('Y') . ' ' .env('APP_NAME') }}, Inc. All Rights Reserved</span>
      </div>

      <!-- Links -->
      <div class="col-12 col-md-7 col-lg-8 d-md-flex justify-content-end">
        <nav class="nav nav-footer">
          <a class="nav-link ps-0 fs-6 fw-semi-bold" href="{{route('privacy-policy')}}">Privacy Policy</a>
          <a class="nav-link fs-6 fw-semi-bold" href="{{route('terms')}}">Terms of Use</a>
        </nav>
      </div>
    </div>
  </div>
</footer>


