<div class="card mb-4">
  <div class="card-body px-2">
    <section id="display-profile">
      <div class="d-flex">
        {{--  User Avatar--}}
        <img src="{{$user->avatar}}" class="avatar-xl rounded-circle" alt="">

        <div class="ms-4">
          <!-- text -->
          <h3 class="mb-1 text-gray-600"> {{$user->fullName()}} </h3>

          <small class="d-block">
            <span><i class="bi bi-calendar-check text-muted me-2"></i>{{$user->created_at}}</span>
          </small>

          <small class="my-2 d-block"><i class="bi bi-pin-map text-muted me-2"></i>{{$user->address}}</small>

          <small class="d-block mb-2">
            <i class="fe fe-map-pin text-muted me-1"></i>
            <span>{{"$user->state, " . $country->where('code', $user->country)->pluck('name')->first()}}</span>
          </small>

          @if ($user->is_verified)
            <span class="badge bg-success-soft" data-bs-toggle="tooltip" data-placement="top"
                  title="Verified">
                  <i class="fe fe-check-circle text-muted me-1"></i>Verified
                </span>
          @endif

        </div>
      </div>
    </section>
  </div>
</div>