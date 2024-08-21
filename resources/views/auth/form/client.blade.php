<form method="POST" class="row registration_form">
  @csrf
  <input type="hidden" name="user_type" value="client">
  <!-- First Name -->
  <div class="mb-3 col-12 col-md-6">
    <label for="first_name" class="form-label"> <span class="text-danger fw-bold">*</span> First Name</label>
    <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
  </div>

  <!-- Last Name -->
  <div class="mb-3 col-12 col-md-6">
    <label for="last_name" class="form-label"><span class="text-danger fw-bold">*</span> Last Name</label>
    <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
  </div>

  <!-- Email -->
  <div class="mb-3 col-12">
    <label for="email" class="form-label"><span class="text-danger fw-bold">*</span> Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email address here" required>
  </div>

  {{-- State --}}
  <div class="mb-3 col-12">
    <label for="role" class="form-label"><span class="text-danger fw-bold">*</span> I am signing up as</label>

    <select class="form-control" name="user_type" required>
      <option>Select Role</option>
      <option value="intern">An Intern</option>
      <option value="lawyer">A Lawyer</option>
      <option value="firm">A Firm</option>
      <option value="client"> A Client</option>
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