<?php

use Livewire\Attributes\Validate;
use Livewire\Component;

new class extends Component {
  #[Validate('email|required', as: 'Email Address')]
  public string $email;

  #[Validate('required', as: 'Password')]
  public string $password;

  #[Validate('boolean')]
  public bool $remember_me = false;

  public function login(): void
  {
    $this->validate();

    try {
      if (!auth()->attempt($this->only('email', 'password'), $this->remember_me)) {
        $this->dispatch('error-alert', title: 'Login Error', message: 'Invalid email or password. Please try again.');
        return;
      }

      $this->dispatch('success-alert', title: 'Login Successful', message: 'You have successfully logged in!');

      // Log login activity
      auth()->user()->activity()->create(["activity" => "Login successful"]);

      $this->redirectRoute('home');
    } catch (\Exception $e) {
      $this->dispatch('error-alert', title: 'Login Error', message: 'Error occurred while logging in. Please try again later or contact support');
    }
  }
};
?>

@section('title', 'Login')

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
              <x-alert :status="session('status')" :message="session('message')" :/>
            @endif

            <!-- Form -->
            <form wire:submit="login">
              @csrf
              <!-- Username -->
              <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" wire:model="email" class="form-control" name="email"
                       placeholder="Email address here" required>
                @error('email') <small class="fw-bold text-danger">{{ $message }}</small>@enderror
              </div>

              <!-- Password -->
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" wire:model="password" class="form-control" name="password"
                       placeholder="**************">
                @error('password') <small class="fw-bold text-danger">{{ $message }}</small>@enderror
              </div>

              <!-- Checkbox -->
              <div class="d-lg-flex justify-content-between align-items-center mb-4">
                <div class="form-check">
                  <input type="checkbox" wire:model="remember_me" class="form-check-input" name="remember_me">
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