<!-- Form -->
<form class="row" method="POST" action="{{ route('profile.update') }}" id="my-profile">
  @csrf
  {{-- Address --}}
  <div class="mb-3 col-md-12">
    <label class="form-label" for="address">
      <span class="text-danger fw-bold">*</span> Address
    </label>

    <input type="text" value="{{ $user->physical_office_address }}" name="physical_office_address" class="form-control"
      placeholder="Address" required>
    @error('physical_office_address')
    <b class="text-danger d-inline-block mt-3">{{ $message }}</b>
    @enderror
  </div>

  {{-- Area of specialization --}}
  <div class="mb-3 col-12 col-md-6">
    <label class="form-label" for="specialty"><span class="text-danger fw-bold">*</span> Area of
</label>
    <input name='specialization' class="form-control tags" value='intellctual-property, oil-and-gas' autofocus>
  </div>

  {{-- Offers Probono --}}
  <div class="mb-3 col-12 col-md-6">
    <label for="probono" class="form-label">
      <span class="text-danger fw-bold">*</span>
      Do you offer probono services?
    </label>
    <select name="offers_probono" class="form-control">
      <option value="yes">Yes i do</option>
      <option value="no">No i don't</option>
    </select>
  </div>

  {{-- Description --}}
  <div class="mb-3 col-md-12">
    <label class="form-label" for="specialty">
      <span class="text-danger fw-bold">*</span> Bio
    </label>

    <textarea name="description" rows="7" id="editor"
      class="form-control">{{ $user->virtual_office->description }}</textarea>
  </div>

  {{-- Submit button --}}
  <div class="col-12">
    <!-- Button -->
    <button class="btn btn-primary" type="submit">
      Save
    </button>
  </div>

</form>

<article>
  <hr class="my-5">
  <h4 class="mb-0">Education<span data-bs-toggle="tooltip" data-placement="right"
      title="All information provided here will be properly confirmed and verified before">
      <i class="fe fe-help-circle"></i></span></h4>
  <p class="mb-4">
    You are required to provide information with regards to your education and degrees
    obtained, as well as any other valid certification
  </p>

  <form action="" method="post" class="row">
    {{-- University attended --}}
    <div class="mb-3 col-12 col-md-6">
      <label class="form-label" for="university">
        <span class="text-danger fw-bold">*</span> University Attended
      </label>

      <input type="text" value="" name="university" class="form-control" placeholder="Name of University Attended"
        required>
      @error('university')
      <b class="text-danger d-inline-block mt-3">{{ $message }}</b>
      @enderror
    </div>

    {{-- Law school attended --}}
    <div class="mb-3 col-12 col-md-6">
      <label class="form-label" for="law_school">
        <span class="text-danger fw-bold">*</span> Law School Attended
      </label>

      <input type="text" value="" name="law_school" class="form-control" placeholder="Law School Attended" required>
      @error('law_school')
      <b class="text-danger d-inline-block mt-3">{{ $message }}</b>
      @enderror
    </div>

  </form>
</article>