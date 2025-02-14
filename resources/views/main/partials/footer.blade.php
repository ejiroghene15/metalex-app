<footer class="mt-auto text-white" id="mg-def-footer">
  <div class="row justify-content-between mx-auto">
    <section class="col-md-6" id="about-summary">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('assets/images/brand/logo/metalex-inverse.svg') }}"
             style="height: 20px; width: 125px"
             alt="">
      </a>
      <p class="mt-5">
        Our flexible and hybrid work systems allows us to seamlessly and effectively deliver our professional
        legal
        services, both remotely; via our virtual workspace and in-person; at any of our physical offices in
        Nigeria.
      </p>

      <!-- Contact -->
      <div class="mt-7 contact-info">
        <p class="mb-5 d-flex gap-3 align-items-center">
          <i class="fa-solid fa-phone-volume" style="font-size: 20px"></i>
          <span>+234-705-983-8239</span>
        </p>
        <p class="mb-5 d-flex gap-3 align-items-center">
          <i class="fa-solid fa-envelope" style="font-size: 20px"></i>
          <a href="mailto:hello@metalexlegal.com" class="text-white">hello@metalexlegal.com</a>
        </p>
        <p class="mb-5 d-flex gap-3 align-items-center">
          <i class="fa-solid fa-location-dot mt-n3" style="font-size: 20px"></i>
          <span>Ukori Law House, 5 Emomejere Street, Ughelli, Delta State.</span>
        </p>
      </div>

      <!-- social media -->
      <p class="mt-7 mb-10" style="font-size: 22px">
        <a href="https://www.facebook.com/metalexlegal" target="_blank" class="text-white text-primary-hover me-4">
          <i class="fa-brands fa-facebook-f"></i>
        </a>
        <a href="https://twitter.com/Metalex_legal" target="_blank" class="text-white text-primary-hover me-4">
          <i class="fa-brands fa-twitter"></i>
        </a>
        <a href="https://twitter.com/Metalex_legal" target="_blank" class="text-white text-primary-hover me-4">
          <i class="fa-brands fa-instagram"></i>
        </a>
        <a href="https://www.linkedin.com/company/metalex-legal/" target="_blank"
           class="text-white text-primary-hover">
          <i class="fa-brands fa-linkedin-in"></i>
        </a>
      </p>
      <!-- end social media -->
    </section>
    <section class="col-md-6">
      <div class="row flex-column">
        <div class="d-flex flex-wrap px-0 justify-content-between">
          <nav class="col-md-5 quick-links">
            <h4 class="text-white">Quick Links</h4>
            <a class="nav-link" href="{{route('main.home')}}">Home</a>
            <a class="nav-link" href="{{route('main.about')}}">About Us</a>
            <a class="nav-link" href="{{route('main.news')}}">News & Updates</a>
            <a class="nav-link" href="{{route('main.careers')}}">Careers</a>
            <a class="nav-link" href="{{route('main.contact-us')}}">Contact Us</a>
            <a class="nav-link" href="{{route('main.faq')}}">FAQ</a>
          </nav>

          <nav class="col-md-5 quick-links">
            <h4 class="text-white">Quick Links</h4>
            <a class="nav-link" href="{{route('sub.tech')}}">Metalex Technologies</a>
            <a class="nav-link" href="{{route('sub.academy')}}">Metalex Academy</a>
            <a class="nav-link" href="{{route('sub.publications')}}">Metalex Publications</a>
            <a class="nav-link" href="{{route('sub.entertainment')}}">Metalex Entertainment</a>
            <a class="nav-link" href="{{route('sub.legal')}}">Metalex Legal</a>
          </nav>

        </div>
        <section class="newsletter">
          <p>Subscribe to our newsletter</p>
          <form action="" class="d-flex">
            <input class="form-control" type="text">
            <button class="btn btn-dark btn-sm">Subscribe</button>
          </form>
          <small>
            Join our newsletter and get resources, curated content, and design inspiration delivered straight to your
            inbox.
          </small>
        </section>
      </div>
    </section>
  </div>
  <hr class="mt-5 mt-sm-8">
  <p class="text-center fs-4 mb-2 copy-right">&copy; {{date('Y')}} Metalex Legal. All Rights Reserved</p>
</footer>
