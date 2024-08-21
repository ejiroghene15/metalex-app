@extends('layout.master')

@section('title', 'Sign Up')

@section('style')
  @parent
  <link rel="stylesheet" href="{{ asset('assets/libs/@yaireo/tagify/dist/tagify.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
  {{--  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">--}}
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
                {{--                <span class="fw-bold">Select the role for which you're signing up</span>--}}
              </div>

              <section id="form-tabs">
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-client" role="tabpanel"
                       aria-labelledby="pills-client-tab">
                    {{-- client form --}}
                    @include('auth.form.client')
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
  {{--  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>--}}

@endsection