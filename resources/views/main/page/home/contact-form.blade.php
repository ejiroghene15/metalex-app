<div class="d-flex flex-wrap align-items-center gap-5" id="contact-form">
  <div class="col-md-3 mx-auto" style="flex-basis: 384px">
    <img src="{{asset('assets/images/background/home/medium-shot-female-economist-working-office.svg')}}"
         class="img-fluid" alt="">
  </div>
  <div class="col">
    <header id="info">
      <h3>Get in touch with us.</h3>
      <p>Fill out the form below, and our team will get back to you as soon as possible.</p>
    </header>
    <form id="contact-us-form">
      <div class="d-flex gap-lg-5 gap-3">
        <div class="col-md-5 flex-grow-1">
          <div class="mb-3">
            <label for="name" class="form-label">Name *</label>
            <input type="text" name="user" class="form-control" id="name" required>
          </div>
        </div>

        <div class="col-md-5 flex-grow-1">
          <div class="mb-3">
            <label for="email" class="form-label">Email *</label>
            <input type="email" name="email" class="form-control" id="email" required>
          </div>
        </div>
      </div>

      <div class="mb-3">
        <label for="message" class="form-label">Message *</label>
        <textarea class="form-control" name="message" id="message" rows="10" required></textarea>
      </div>


      <button class="btn btn-lg btn-primary text-white">Send Message
      </button>
    </form>
  </div>
</div>