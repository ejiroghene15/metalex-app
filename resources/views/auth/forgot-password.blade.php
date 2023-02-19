@extends('layout.master')

@section('title', 'Forgot Password')

@section('body')
<main>
  <section class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0 min-vh-100">
      <div class="col-lg-5 col-md-8 py-8 py-xl-0">
        <!-- Card -->
        <div class="card shadow">
          <!-- Card body -->
          <div class="card-body p-6">
            <div class="mb-4">
              <a href="{{ route('home') }}">
                <img src="{{ asset('assets/images/brand/logo/metalex_full_logo.svg') }}"
                  style="object-position: -5px 0; height: 30px" class="mb-5" alt="">
              </a>
              <h2 class="mb-1 fw-bold">Forgot Password</h2>
              <p>Enter your email to get a password reset link.</p>
            </div>
            <!-- Form -->
            <form method="POST" class="forgot_password">
              @csrf
              <!-- Email -->
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Your Email " required />
              </div>
              <!-- Button -->
              <div class="mb-3 d-grid">
                <button type="submit" class="btn btn-primary submit_button">
                  <span class="ca__text">Send Reset Link</span>
                  <span class="ca__loader" style="display: none">
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Sending Reset Link...
                  </span>
                </button>
              </div>
              <span class="fw-bold">Return to <a href="{{ route('login') }}">Login Page</a></span>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection

@section('scripts')
@parent
<script src="{{ asset('assets/js/custom/auth.js') }}"></script>
@endsection