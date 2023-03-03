<form class="row" method="POST" action="{{ route('office.update') }}" id="my-profile">
  @csrf
  {{-- Firm Name --}}
  <div class="mb-3 col-12 col-md-6">
    <label class="form-label" for="firm">
      <span class="text-danger fw-bold">*</span> Name of Firm
    </label>

    <input type="text" value="{{ $user->virtual_office->firm_name }}" name="firm_name" class="form-control"
      placeholder="Name of Firm" required>

    @error('firm_name')
    <b class="text-danger d-inline-block mt-3">{{ $message }}</b>
    @enderror
  </div>

  {{-- Address --}}
  <div class="mb-3 col-12 col-md-6">
    <label class="form-label" for="address">
      <span class="text-danger fw-bold">*</span> Address
    </label>

    <input type="text" value="{{ $user->virtual_office->address }}" name="address" class="form-control"
      placeholder="Address" required>
    @error('address')
    <b class="text-danger d-inline-block mt-3">{{ $message }}</b>
    @enderror
  </div>

  {{-- Area of specialization --}}
  <div class="mb-3 col-12 col-md-6">
    <label class="form-label" for="specialty"><span class="text-danger fw-bold">*</span> Area of
      Specialization</label>
    <input name='specialization' class="form-control tags" value='{{ $user->virtual_office->specialization }}'
      autofocus>
  </div>

  {{-- Offers Probono --}}
  <div class="mb-3 col-12 col-md-6">
    <label for="probono" class="form-label">
      <span class="text-danger fw-bold">*</span>
      Do you offer probono services?
    </label>
    <select name="offers_probono" class="form-control">
      <option value="yes" @if($user->virtual_office->offers_probono === 'yes') selected @endif>Yes i do</option>
      <option value="no" @if($user->virtual_office->offers_probono === 'no') selected @endif>No i don't</option>
    </select>
  </div>

  {{-- Description --}}
  <div class="mb-3 col-md-12">
    <label class="form-label" for="specialty">
      <span class="text-danger d-none fw-bold">*</span> Bio
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
