<?php

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

new class extends Component {
  #[Validate('required', as: 'First Name')]
  public string $first_name;

  #[Validate('required', as: 'Last Name')]
  public string $last_name;

  #[Validate('email|unique:users', as: 'Email Address')]
  public string $email;

  #[Validate('required|min:6|confirmed', as: 'Password', message: ['confirmed' => 'The :attribute does not match.'])]
  public string $password;

  #[Validate('required', as: 'Confirm Password')]
  public string $password_confirmation;

  #[Validate('accepted:', as: 'Terms of Service and Privacy Policy')]
  public string $consent;

  public function register(): void
  {
    $this->validate();

    try {
      $this->password = Hash::make($this->password);

      $user = User::create($this->only('first_name', 'last_name', 'email', 'password'));

//      event(new Registered($user));

      // Log registration activity
      $user->activity()->create(["activity" => "Registration successful"]);

      $this->dispatch('success-alert', title: 'Registration Successful', message: 'Your account has been created successfully! Please check your email to verify your account.');

      $this->reset();
    } catch (\Exception $e) {
      $this->dispatch('error-alert', title: 'Registration Error', message: 'Error occured while registering. Please try again later or contact support');
    }
  }
};
?>

@section('title', 'Register')

<main>
  <section class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0 min-vh-100">
      <div class="col-lg-6 col-md-8 py-8 py-xl-0">
        <!-- Card -->
        <div class="card shadow">
          <!-- Card body -->
          <div class="card-body p-6">
            <div class="mb-4">
              <a href="{{ route('home') }}">
                <img src="{{ asset('assets/images/brand/logo/metalex_full_logo.svg') }}"
                     style="object-position: -5px 0; height: 30px" class="mb-5" alt="">
              </a>
              <h2 class="mb-1 fw-bold">Sign Up </h2>
            </div>

            <section id="form-tabs">

              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-client" role="tabpanel"
                     aria-labelledby="pills-client-tab">
                  <form wire:submit.prevent="register" class="row">

                    <!-- First Name -->
                    <div class="mb-4 col-12 col-md-6">
                      <label for="first_name" class="form-label"> <span class="text-danger fw-bold">*</span> First Name</label>
                      <input wire:model="first_name" type="text" class="form-control" name="first_name"
                             placeholder="First Name" required>
                      @error('first_name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <!-- Last Name -->
                    <div class="mb-4 col-12 col-md-6">
                      <label for="last_name" class="form-label"><span class="text-danger fw-bold">*</span> Last
                        Name</label>
                      <input wire:model="last_name" type="text" class="form-control" name="last_name"
                             placeholder="Last Name" required>
                      @error('last_name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-4 col-12">
                      <label for="email" class="form-label"><span class="text-danger fw-bold">*</span>
                        Email Address
                      </label>
                      <input wire:model="email" type="email" class="form-control" name="email"
                             placeholder="Email address here" required>
                      @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-4 col-12 col-md-6">
                      <label for="password" class="form-label"><span class="text-danger fw-bold">*</span>
                        Password</label>
                      <input wire:model="password" type="password" class="form-control" name="password"
                             placeholder="**********" required>
                      @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-4 col-12 col-md-6">
                      <label for="password" class="form-label"><span class="text-danger fw-bold">*</span> Confirm
                        Password</label>
                      <input wire:model="password_confirmation" type="password" class="form-control"
                             name="password_confirmation" placeholder="*********"
                             required>
                      @error('password_confirmation') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <!-- Checkbox -->
                    <div class="mb-3 mt-5">
                      <div class="form-check">
                        <input wire:model="consent" type="checkbox" id="consent" class="form-check-input"
                               name="i_agree">
                        <label class="form-check-label" for="consent">
                          <span>I agree to the
                            <a href="{{route('terms')}}">Terms of Service </a> and
                            <a href="{{route('privacy-policy')}}">Privacy Policy.</a>
                          </span>
                        </label>
                      </div>
                      @error('consent') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="d-grid">
                      <button type="submit" class="btn btn-primary submit_button">
                        <span class="ca__text" wire:loading.remove>Create an Account</span>
                        <span class="ca__loader" wire:loading>
                          <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                          Creating account...
                        </span>
                      </button>
                    </div>
                  </form>
                </div>
              </div>

              <div class="mt-4 text-center">
                <span class="fw-bold">Already have an account?
                  <a href="{{ route('login') }}" class="ms-1">Sign in</a>
                </span>
              </div>

            </section>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>


<script>
  console.log($wire)
  $wire.on('registration-success', (message) => {
    alert('this works')
  })
</script>