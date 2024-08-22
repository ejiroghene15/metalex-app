<div class="col-xl-3 mx-auto col-lg-6 col-md-6 col-12">
  <!-- Card -->
  <div class="card mb-4">
    <!-- Card body -->
    <div class="card-body">
      <div class="text-center">
        <div class="position-relative">
          <img src="{{$user->avatar}}" class="rounded-circle avatar-xl mb-3" alt="">
          <a href="#" class="position-absolute mt-10 ms-n5">
            <span class="status bg-success"></span>
          </a>
        </div>
        <h4 class="mb-0">{{$user->fullName()}}</h4>
        @if($user->country)
          <p class="mb-0">
            <i class="fe fe-map-pin me-1 fs-6"></i>{{$country->where('code', $user->country)->pluck('name')->first()}}
          </p>
        @endif
      </div>


      <div class="d-flex justify-content-between border-bottom py-2 mt-6">
        <h6 class="text-muted">Role</h6>
        <span class="text-dark"> {{$user->user_type}} </span>
      </div>

      <div class="d-flex justify-content-between border-bottom py-2">
        <h6 class="text-muted">Joined at</h6>
        <span> {{$user->created_at->format('d M, Y')}} </span>
      </div>

      @if ($user->is_verified)
        <div class="d-flex justify-content-between pt-2">
          <h6 class="text-muted">Status</h6>
          <span class="badge bg-success-soft" data-bs-toggle="tooltip" data-placement="top"
                title="Verified">
                  <i class="fe fe-check-circle text-muted me-1"></i>Verified
                </span>
        </div>
      @endif

    </div>
  </div>
</div>