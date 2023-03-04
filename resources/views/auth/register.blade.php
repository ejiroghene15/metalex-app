@extends('layout.master')

@section('title', 'Sign Up')

@section('style')
@parent
<link rel="stylesheet" href="{{ asset('assets/libs/@yaireo/tagify/dist/tagify.css') }}">
@endsection

@section('body')
<main>
  <section class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0 min-vh-100">
      <div class="col-lg-6 col-md-8 py-8 py-xl-0">
        <!-- Card -->
        <div class="card shadow">
          <!-- Card body -->
          <div class="card-body p-6">
            <div class="mb-4">
              <a href="{{ url('/') }}">
                <img src="{{ asset('assets/images/brand/logo/metalex_full_logo.svg') }}"
                  style="object-position: -5px 0; height: 30px" class="mb-5" alt="">
              </a>
              <h2 class="mb-1 fw-bold">Sign Up </h2>
              <span class="fw-bold">Select the role for which you're signing up</span>
            </div>

            <section id="form-tabs">
              <nav class="nav mt-3 mb-5 row g-2">
                <!-- btn group -->
                <div class="btn-group mb-2 mb-md-0 col-lg-4" role="group" aria-label="socialButton">
                  <button type="button"
                    class="btn btn-light active shadow-sm d-flex justify-content-center align-items-center"
                    data-bs-toggle="pill" data-bs-target="#pills-client" role="tab" aria-controls="pills-client">
                    <i class="mdi mdi-account-outline me-2 text-success" style="font-size: 20px"></i>
                    <span>Client</span>
                  </button>
                </div>
                <!-- btn group -->
                <div class="btn-group mb-2 mb-md-0 col-lg-4" role="group" aria-label="socialButton">
                  <button type="button" class="btn btn-light shadow-sm d-flex justify-content-center align-items-center"
                    data-bs-toggle="pill" data-bs-target="#pills-lawyer" role="tab" aria-controls="pills-lawyer">
                    <i class="mdi mdi-gavel text-info me-2" style="font-size: 20px"></i>
                    <span>Lawyer</span>
                  </button>
                </div>
                <!-- btn group -->
                <div class="btn-group col-lg-4" role="group" aria-label="socialButton">
                  <button type="button" class="btn btn-light shadow-sm d-flex justify-content-center align-items-center"
                    data-bs-toggle="pill" data-bs-target="#pills-firm" role="tab" aria-controls="pills-firm">
                    <i class="bi bi-building text-secondary me-2" style="font-size: 20px"></i>
                    <span>Firm</span>
                  </button>
                </div>
              </nav>

              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-client" role="tabpanel"
                  aria-labelledby="pills-client-tab">
                  {{-- client form --}}
                  @include('auth.form.client')
                </div>

                <div class="tab-pane fade" id="pills-lawyer" role="tabpanel" aria-labelledby="pills-lawyer-tab">
                  {{-- lawyers form --}}
                  @include('auth.form.lawyer')
                </div>

                <div class="tab-pane fade" id="pills-firm" role="tabpanel" aria-labelledby="pills-firm-tab">
                  {{-- firms form --}}
                  @include('auth.form.firm')
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
@endsection

@section('scripts')
<script src="{{ asset('assets/libs/@yaireo/tagify/dist/tagify.min.js') }}"></script>
@parent
{{-- Page Scripts --}}
<script src="{{ asset('assets/libs/flatpickr/dist/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/flatpickr.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script>
  const CSC_TOKEN = "{{ env('CSC_API_TOKEN') }}"
</script>
<script src="{{ asset('assets/js/custom/app.js') }}"></script>
<script src="{{ asset('assets/js/custom/auth.js') }}"></script>
@endsection