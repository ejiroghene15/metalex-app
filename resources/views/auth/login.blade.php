@extends('layout.master')

@section('title', 'Login')

@section('body')
<!-- Page content -->
<main>
  <section class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0 min-vh-100">

      <div class="col-lg-5 col-md-8 py-8 py-xl-0">
        <!-- Card -->
        <div class="card shadow ">
          <!-- Card body -->
          <div class="card-body p-6">
            <div class="mb-4">
              <a href="{{ url('/') }}">
                <img src="{{ asset('assets/images/brand/logo/metalex_full_logo.svg') }}"
                  style="object-position: -5px 0; height: 30px" class="mb-5" alt="">
              </a>
              <h2 class="mb-1 fw-bold">Sign in</h2>
              <span class="fw-bold">Don’t have an account?
                <a href="{{ route('register') }}" class="ms-1">Sign up</a>
              </span>
            </div>

            {{-- alert display section --}}
            @if (session('message'))
            <x-alert :status="session('status')" :message="session('message')" : />
            @endif

            <!-- Form -->
            <form method="POST" action="{{ route('auth.login') }}">
              @csrf
              <!-- Username -->
              <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" name="email" placeholder="Email address here" required>
                @error('email') <small class="fw-bold text-danger">{{ $message }}</small>@enderror
              </div>

              <!-- Password -->
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="**************">
                @error('password') <small class="fw-bold text-danger">{{ $message }}</small>@enderror
              </div>

              <!-- Checkbox -->
              <div class="d-lg-flex justify-content-between align-items-center mb-4">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="remember_me">
                  <label class="form-check-label" for="rememberme">Remember me</label>
                </div>

                <div>
                  <a href="{{ route('password.request') }}">Forgot your password?</a>
                </div>
              </div>

              <!-- Button -->
              <div class="d-grid">
                <button type="submit" class="btn btn-primary ">Sign in</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection