@extends('layout.master')

@section('title', 'Reset Password')

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
                <img src="{{ secure_asset('assets/images/brand/logo/metalex_full_logo.svg') }}"
                  style="object-position: -5px 0; height: 30px" class="mb-5" alt="">
              </a>
              <h2 class="mb-1 fw-bold">Reset Password</h2>
            </div>

            @if ($errors->any())
            <x-alert status="danger" :message="$errors->first()" : />
            @endif
            <!-- Form -->
            <form method="POST" action="{{ route('password.update') }}">
              @csrf

              <!-- Password -->
              <div class="mb-3">
                <label for="password" class="form-label">New Password</label>
                <input type="password" class="form-control" name="password" placeholder="**************">
                @error('password') <small class="fw-bold text-danger">{{ $message }}</small>@enderror
              </div>

              <!-- Password -->
              <div class="mb-3">
                <label for="password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" placeholder="**************">
              </div>

              <input type="hidden" name="token" value="{{ $token }}">
              <input type="hidden" name="email" value="{{ $_GET['email'] }}">
              <!-- Button -->
              <div class="mb-3 d-grid">
                <button type="submit" class="btn btn-primary ">Reset Password</button>
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