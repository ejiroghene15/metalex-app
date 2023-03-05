@extends('layout.master')

@section('title', 'Office Settings')

@section('style')
@parent
<link rel="stylesheet" href="{{ asset('assets/libs/@yaireo/tagify/dist/tagify.css') }}">
<link rel="stylesheet" href="{{ asset('assets/libs/dropzone/dist/dropzone.css') }}">
@endsection

@section('body')
<!-- Navbar -->
@include('partials.navbar')

<main>
  <section class="pt-5 pb-5">
    <div class="container">
      <!-- User info -->
      @include('dashboard.partials.user_info')

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

            {{-- Display this informamation only for firm profiles --}}
            @if ($user->user_type === 'firm')
            <div class="card-header">
              <h3 class="mb-0">{{ $user->firm->firm_name }}</h3>
              <p class="mb-0">
                You have full control to manage your office setting.
              </p>
            </div>
            @endif

            <!-- Card body -->
            <section class="card-body">
              <header>
                @if ($user->user_type === 'firm')
                <div class="d-lg-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center mb-4 mb-lg-0">
                    <img src="{{ $user->firm->logo ?? asset('assets/images/brand/logo/metalex_full_logo.svg') }}"
                      id="img-uploaded" class="avatar-xl rounded-circle" alt="">
                    <div class="ms-3">
                      <h4 class="mb-0">Firm Logo </h4>
                      <p class="mb-0">
                        PNG or JPG no larger than 1MB.
                      </p>
                      <p class="mb-0 text-primary">
                        This logo will appear as your firm's default image on the directory listings page
                      </p>
                    </div>
                  </div>

                  <div>
                    <button id="change_avatar" class="btn btn-outline-secondary btn-sm">Change Logo</button>
                    <form action="{{ route('office.set-logo') }}" method="post" id="upload-avatar" class="d-inline"
                      enctype="multipart/form-data" style="display: none !important">
                      @csrf
                      <input type="file" id="avatar" name="logo" style="display: none">
                      <button type="submit" class="btn btn-outline-success btn-sm">Upload</button>
                    </form>
                  </div>
                </div>
                @error('logo') <b class="text-danger d-inline-block mt-3">{{ $message }}</b> @enderror
                <hr class="my-5">
                @endif
              </header>

              @switch($user->user_type)
              @case("lawyer")
              @include('dashboard.office.lawyer')
              @break
              @case("firm")
              @include('dashboard.office.firm')
              @break
              @endswitch

            </section>

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
<script src="{{ asset('assets/libs/@yaireo/tagify/dist/tagify.min.js') }}"></script>
@parent
{{-- Page Scripts --}}
<script src="{{ asset('assets/libs/flatpickr/dist/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/flatpickr.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/libs/dropzone/dist/min/dropzone.min.js') }}"></script>
<script src="{{ asset('assets/libs/quill/dist/quill.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/ckeditor.js') }}"></script>
<script src="{{ asset('assets/js/custom/app.js') }}"></script>
@endsection