<h3>Background Information</h3>
<p class="mb-4">
  This will be displayed along with every other information on the directory listing page
  <span data-bs-toggle="tooltip" data-placement="right"
    title="All information provided here will be properly confirmed and verified and approved before a lawyer can appear in the directory listing">
    <i class="fe fe-help-circle"></i></span>
</p>

<!-- Form -->
<form class="row" method="POST" action="{{ route('office.update') }}">
  @csrf
  <input type="hidden" name="user_type" value="lawyer">
  {{-- Year of call --}}
  <div class="mb-3 col-md-12">
    <label class="form-label" for="year_of_call">
      <span class="text-danger fw-bold">*</span> Year of Call
    </label>

    <input type="text" class="form-control flatpickr" name="year_of_call" value="{{ $user->lawyer->year_of_call }}"
      required>
    @error('year_of_call')
    <b class="text-danger d-inline-block mt-3">{{ $message }}</b>
    @enderror
  </div>

  {{-- University attended --}}
  <div class="mb-3 col-12 col-md-6">
    <label class="form-label" for="university">
      <span class="text-danger fw-bold">*</span> University Attended
    </label>

    <input type="text" name="university" class="form-control" value="{{ $user->lawyer->university }}"
      placeholder="Name of University Attended" required>

    @error('university')
    <b class="text-danger d-inline-block mt-3">{{ $message }}</b>
    @enderror
  </div>

  {{-- Law school attended --}}
  <div class="mb-3 col-12 col-md-6">
    <label class="form-label" for="law_school">
      <span class="text-danger fw-bold">*</span> Law School Attended
    </label>

    <input type="text" name="law_school" class="form-control" value="{{ $user->lawyer->law_school }}"
      placeholder="Law School Attended" required>

    @error('law_school')
    <b class="text-danger d-inline-block mt-3">{{ $message }}</b>
    @enderror
  </div>

  {{-- Area of specialization --}}
  <div class="mb-3 col-12 col-md-6">
    <label class="form-label" for="specialty"><span class="text-danger fw-bold">*</span> Area of Specialization
    </label>
    <input name='specialization' class="form-control tags" value="{{ $user->lawyer->specialization }}" autofocus>
  </div>

  {{-- Offers Probono --}}
  <div class="mb-3 col-12 col-md-6">
    <label for="probono" class="form-label">
      <span class="text-danger fw-bold">*</span>
      Do you offer probono services?
    </label>
    <select name="offers_probono" class="form-control">
      <option value="yes" @if($user->firm->offers_probono === 'yes') selected @endif>Yes i do</option>
      <option value="no" @if($user->firm->offers_probono === 'no') selected @endif>No i don't</option>
    </select>
  </div>

  {{-- Description --}}
  <div class="mb-3 col-md-12">
    <label class="form-label" for="specialty">
      <span class="text-danger fw-bold">*</span> Bio
    </label>

    <textarea name="description" rows="7" id="editor" class="form-control">{{ $user->lawyer->description }}</textarea>
  </div>

  {{-- Submit button --}}
  <div class="col-12">
    <!-- Button -->
    <button class="btn btn-primary" type="submit">
      Save
    </button>
  </div>
</form>