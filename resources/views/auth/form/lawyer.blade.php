<form method="POST" class="row registration_form">
  @csrf
  <input type="hidden" name="user_type" value="lawyer">
  <!-- First Name -->
  <div class="mb-3 col-12 col-md-6">
    <label for="first_name" class="form-label"><span class="text-danger fw-bold">*</span> First Name</label>
    <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
  </div>

  <!-- Last Name -->
  <div class="mb-3 col-12 col-md-6">
    <label for="last_name" class="form-label"><span class="text-danger fw-bold">*</span> Last Name</label>
    <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
  </div>

  <!-- Email -->
  <div class="mb-3">
    <label for="email" class="form-label"><span class="text-danger fw-bold">*</span> Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email address here" required>
  </div>

  {{-- Country --}}
  <div class="mb-3 col-12 col-md-4">
    <label class="form-label"><span class="text-danger fw-bold">*</span> Country</label>
    @include('components.countries')
  </div>

  {{-- State --}}
  <div class="mb-3 col-12 col-md-4">
    <label class="form-label d-flex justify-content-between">

      <span><span class="text-danger fw-bold">*</span> State</span>

      <span class="spinner-border spinner-border-sm text-primary state-loader" role="loading" style="display: none">
        <small class="visually-hidden">Loading...</small>
      </span>
    </label>

    <select class="form-control" name="state" required>
      <option value="">Select State</option>
    </select>
  </div>

  {{-- zip code --}}
  <div class="mb-3 col-12 col-md-4">
    <label class="form-label" for="zipCode">Zip/Postal Code</label>
    <input type="text" name="zip_code" class="form-control" placeholder="Zip" required>
  </div>

  {{-- specialization --}}
  <div class="mb-3">
    <label class="form-label" for="specialty"><span class="text-danger fw-bold">*</span> Area of Specialization</label>
    <input name='specialization' class="form-control tags" value='intellctual-property, oil-and-gas' autofocus>
  </div>

  <!-- Year of Call -->
  <div class="mb-3">
    <label for="year_of_call" class="form-label"><span class="text-danger fw-bold">*</span> Year Of Call</label>
    <input type="text" class="form-control flatpickr" name="year_of_call" required>
  </div>

  <!-- Probono -->
  <div class="mb-3">
    <label for="probono" class="form-label"><span class="text-danger fw-bold">*</span>Do you offer probono
      services?</label>
    <select name="offers_probono" class="form-control">
      <option value="yes">Yes i do</option>
      <option value="no">No i don't</option>
    </select>
  </div>

  <!-- Password -->
  <div class="mb-3 col-12 col-md-6">
    <label for="password" class="form-label"><span class="text-danger fw-bold">*</span> Password</label>
    <input type="password" class="form-control" name="password" placeholder="**********" required>
  </div>

  <!-- Confirm Password -->
  <div class="mb-3 col-12 col-md-6">
    <label for="password" class="form-label"><span class="text-danger fw-bold">*</span> Confirm Password</label>
    <input type="password" class="form-control" name="password_confirmation" placeholder="*********" required>
  </div>

  <!-- Checkbox -->
  <div class="mb-3">
    <div class="form-check">
      <input type="checkbox" class="form-check-input" name="i_agree">
      <label class="form-check-label" for="agreeCheck">
        <span>I agree to the
          <a href="{{route('terms')}}">Terms of Service </a>and
          <a href="{{route('privacy-policy')}}">Privacy Policy.</a></span>
      </label>
    </div>
  </div>

  <div class="d-grid">
    <button type="submit" class="btn btn-primary submit_button">
      <span class="ca__text">Create an Account</span>
      <span class="ca__loader" style="display: none">
        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
        Creating account...
      </span>
    </button>
  </div>
</form>