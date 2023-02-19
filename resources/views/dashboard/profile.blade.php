@extends('layout.master')

@section('title', 'Edit Profile')

@section('body')
<!-- Navbar -->
@include('partials.navbar')

<main>
  <section class="pt-5 pb-5">
    <div class="container">
      <!-- User info -->
      <div class="row align-items-center">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
          <!-- Bg -->
          <div class="pt-16 rounded-top-md"
            style="background: url({{ asset('assets/images/background/profile-bg.jpg') }}) no-repeat;background-size: cover;">
          </div>
          <div class="card rounded-0 rounded-bottom  px-4  pt-2 pb-4 ">
            <div class="d-flex align-items-end justify-content-between  ">
              <div class="d-flex align-items-center">

                <div class="me-2 position-relative d-flex justify-content-end align-items-end mt-n5">
                  <img src="{{ $user->avatar }}" class="avatar-xl rounded-circle border border-4 border-white" alt="">
                </div>

                <div class="lh-1">
                  <h2 class="mb-0">{{ $user->first_name . ' ' . $user->last_name }}
                    @if ($user->is_verified)
                    <a href="#" class="text-decoration-none" data-bs-toggle="tooltip" data-placement="top"
                      title="Verified">
                      <i class="fe fe-check-circle text-success" style="font-size: 14px"></i>
                    </a>
                    @endif

                  </h2>
                  <p class=" mb-0 d-block">{{ $user->email }}</p>
                </div>

              </div>
              <div>
                @if (!$user->is_verified)
                <form action="{{ route('verification.send') }}" method="post">
                  @csrf
                  <button class="btn btn-sm btn-primary">Resend Verification Link</button>
                </form>
                @else
                <a href="profile-edit.html" class="btn btn-primary btn-sm d-none d-md-block">
                  Account Setting
                </a>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- alert display section --}}
      @if (session('message'))
      <x-alert :status="session('status')" :message="session('message')" : />
      @endif

      <!-- Content -->
      <div class="row mt-0 mt-md-4">
        @include('dashboard.partials.sidebar')

        <div class="col-lg-9 col-md-8 col-12">
          <!-- Card -->
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-0">Profile Details</h3>
              <p class="mb-0">
                You have full control to manage your own account setting.
              </p>
            </div>
            <!-- Card body -->
            <div class="card-body">
              <div class="d-lg-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center mb-4 mb-lg-0">
                  <img src="{{ $user->avatar }}" id="img-uploaded" class="avatar-xl rounded-circle" alt="">
                  <div class="ms-3">
                    <h4 class="mb-0">Your avatar</h4>
                    <p class="mb-0">
                      PNG or JPG no larger than 1MB.
                    </p>
                  </div>
                </div>
                <div>
                  <button id="change_avatar" class="btn btn-outline-secondary btn-sm">Change Avatar</button>
                  <form action="{{ route('update.avatar') }}" method="post" id="upload-avatar" class="d-inline"
                    enctype="multipart/form-data" style="display: none !important">
                    @csrf
                    <input type="file" id="avatar" name="avatar" style="display: none">
                    <button type="submit" class="btn btn-outline-success btn-sm">Upload</button>
                  </form>
                </div>

              </div>
              @error('avatar') <b class="text-danger d-inline-block mt-3">{{ $message }}</b> @enderror

              <hr class="my-5">

              <div>
                <h4 class="mb-0">Personal Details</h4>
                <p class="mb-4">
                  Edit your personal information and address.
                </p>

                <!-- Form -->
                <form class="row" method="POST" action="{{ route('update.base_profile') }}">
                  @csrf
                  <!-- First name -->
                  <div class="mb-3 col-12 col-md-6">
                    <label class="form-label" for="fname"><span class="text-danger fw-bold">*</span> First Name</label>
                    <input type="text" value="{{ $user->first_name }}" name="first_name" class="form-control"
                      placeholder="First Name" required>
                  </div>

                  <!-- Last name -->
                  <div class="mb-3 col-12 col-md-6">
                    <label class="form-label" for="lname"><span class="text-danger fw-bold">*</span> Last Name</label>
                    <input type="text" value="{{ $user->last_name }}" name="last_name" class="form-control"
                      placeholder="Last Name" required>
                  </div>

                  <!-- Country -->
                  <div class="mb-3 col-12 col-md-6">
                    <label class="form-label">Country</label>
                    @include('components.countries')
                  </div>

                  <!-- State -->
                  <div class="mb-3 col-12 col-md-6">
                    <label class="form-label d-flex justify-content-between">
                      <span><span class="text-danger fw-bold">*</span> State</span>
                      <span class="spinner-border spinner-border-sm text-primary state-loader" role="loading"
                        style="display: none">
                        <small class="visually-hidden">Loading...</small>
                      </span>
                    </label>

                    <select class="form-control" name="state" required>
                      <option value="{{ $user->state }}">{{ $user->state }}</option>
                    </select>
                  </div>

                  {{-- City --}}
                  <div class="mb-3 col-12 col-md-6">
                    <label class="form-label" for="city">City</label>
                    <input type="text" name="city" class="form-control" placeholder="City" value="{{ $user->city }}">
                  </div>

                  {{-- Zip Code --}}
                  <div class="mb-3 col-12 col-md-6">
                    <label class="form-label" for="address">Zip Code</label>
                    <input type="text" name="zip_code" class="form-control" placeholder="Zip Code"
                      value="{{ $user->zip_code }}">
                  </div>

                  {{-- Submit button --}}
                  <div class="col-12">
                    <!-- Button -->
                    <button class="btn btn-primary" type="submit">
                      Update Profile
                    </button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- footer -->
@include('dashboard.partials.footer')
@endsection

@section('scripts')
@parent
{{-- Page Scripts --}}
<script src="{{ asset('assets/libs/flatpickr/dist/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/flatpickr.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script>
  const CSC_TOKEN = "{{ env('CSC_API_TOKEN') }}"
</script>
<script src="{{ asset('assets/js/custom/app.js') }}"></script>
@endsection