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
            <img src="{{ $user->user_type === 'firm' ? $user->virtual_office->logo : $user->avatar }}"
              class="avatar-xl rounded-circle border border-4 border-white" alt="">

            @if ($user->is_verified)
            <a href="#" class="position-absolute top-0 end-0" data-bs-toggle="tooltip" data-placement="top"
              title="Verified">
              <img src="{{ asset('assets/images/svg/checked-mark.svg') }}" alt="" height="30" width="30">
            </a>
            @endif
          </div>

          <div class="lh-1">
            <h2 class="mb-0">
              @if ($user->user_type === 'firm')
              {{ $user->firm_name }}
              @else
              {{ $user->first_name . ' ' . $user->last_name }}
              @endif
              {{-- @if ($user->is_verified)
              <a href="#" class="text-decoration-none" data-bs-toggle="tooltip" data-placement="top" title="Verified">
                <i class="fe fe-check-circle text-success" style="font-size: 14px"></i>
              </a>
              @endif --}}
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
          @if (Route::currentRouteName() === 'user.profile')
          <button id="edit-profile" class="btn btn-primary btn-sm d-none d-md-block">
            Edit Profile
          </button>
          @endif
          @endif
        </div>

      </div>
    </div>
  </div>
</div>