<?php

use Illuminate\Auth\Events\PasswordReset;
use Livewire\Component;

new class extends Component {

  #[\Livewire\Attributes\Url]
  #[\Livewire\Attributes\Session]
  public string $email = '';

  public $password;

  public $password_confirmation;

  public $token;

  public function mount($token): void
  {
    $this->token = $token;
  }

  public function resetPassword(Request $request): void
  {
    $this->validate([
      'token' => 'required',
      'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
      $this->only('email', 'password', 'password_confirmation', 'token'),
      function ($user, $password) {
        $user->forceFill([
          'password' => Hash::make($password)
        ])->setRememberToken(Str::random(60));

        $user->save();

        event(new PasswordReset($user));
      }
    );

    if ($status === Password::PASSWORD_RESET) {
      $this->dispatch('success-alert', title: 'Password Reset Successful', message: 'Your password has been reset successfully. You can now log in with your new password.');
      $this->redirectRoute('login');
    } else {
      $this->dispatch('error-alert', title: 'Password Reset Error', message: __($status));
    }

  }
};
?>


@section('title', 'Reset Password')

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
              <h2 class="mb-1 fw-bold">Reset Password</h2>
            </div>

            <!-- Form -->
            <form method="POST" wire:submit="resetPassword">
              @csrf

              <!-- Password -->
              <div class="mb-3">
                <label for="password" class="form-label">New Password</label>
                <input type="password" wire:model="password" class="form-control" name="password" placeholder="**************">
                @error('password') <small class="fw-bold text-danger">{{ $message }}</small>@enderror
              </div>

              <!-- Password -->
              <div class="mb-3">
                <label for="password" class="form-label">Confirm Password</label>
                <input type="password" wire:model="password_confirmation" class="form-control" name="password_confirmation" placeholder="**************">
              </div>

              <!-- Button -->
              <div class="mb-3 d-grid">
                <button type="submit" class="btn btn-primary ">Reset Password</button>
              </div>

              <span class="fw-bold">Return to <a wire:navigate href="{{ route('login') }}">Login Page</a></span>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>