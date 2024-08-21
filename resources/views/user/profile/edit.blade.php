<div class="card mb-4">
  <div class="card-body px-2">
    <section id="edit-profile">
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
          <form action="{{ route('user.avatar.update') }}" method="post" id="upload-avatar" class="d-inline"
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
        <form class="row" method="POST" action="{{ route('user.profile.update') }}" id="my-profile">
          @csrf
          <!-- First name -->
          <div class="mb-3 col-12 col-md-6">
            <label class="form-label" for="fname"><span class="text-danger fw-bold">*</span> First
              Name</label>
            <input type="text" value="{{ $user->first_name }}" name="first_name" class="form-control"
                   placeholder="First Name" required>
            @error('first_name') <b class="text-danger d-inline-block mt-3">{{ $message }}</b> @enderror
          </div>

          <!-- Last name -->
          <div class="mb-3 col-12 col-md-6">
            <label class="form-label" for="lname"><span class="text-danger fw-bold">*</span> Last Name</label>
            <input type="text" value="{{ $user->last_name }}" name="last_name" class="form-control"
                   placeholder="Last Name" required>
            @error('last_name') <b class="text-danger d-inline-block mt-3">{{ $message }}</b> @enderror
          </div>

          {{-- Address --}}
          <div class="mb-3 col-lg-12 col-md-12">
            <label class="form-label" for="address">Address</label>
            <input type="text" name="address" class="form-control" placeholder="Address"
                   value="{{ $user->address }}">
            @error('address') <b class="text-danger d-inline-block mt-3">{{ $message }}</b> @enderror
          </div>

          <!-- Country -->
          <div class="mb-3 col-12 col-md-6">
            <label class="form-label">Country</label>
            @include('components.countries')
            @error('country') <b class="text-danger d-inline-block mt-3">{{ $message }}</b> @enderror
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
            @error('state') <b class="text-danger d-inline-block mt-3">{{ $message }}</b> @enderror
          </div>

          {{-- City --}}
          <div class="mb-3 col-12 col-md-6">
            <label class="form-label" for="city">City</label>
            <input type="text" name="city" class="form-control" placeholder="City" value="{{ $user->city }}">
            @error('city') <b class="text-danger d-inline-block mt-3">{{ $message }}</b> @enderror
          </div>

          {{-- Zip Code --}}
          <div class="mb-3 col-12 col-md-6">
            <label class="form-label" for="address">Zip Code</label>
            <input type="text" name="zip_code" class="form-control" placeholder="Zip Code"
                   value="{{ $user->zip_code }}">
          </div>

          @if ($user->is_verified)
            {{-- Submit button --}}
            <div class="col-12">
              <!-- Button -->
              <button class="btn btn-success" type="submit">
                Update Profile
              </button>
            </div>
          @endif

        </form>

      </div>
    </section>
  </div>
</div>
