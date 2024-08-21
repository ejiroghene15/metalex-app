<select class="form-control _countries" name="country" data-width="100%" required style="padding: .5rem 1rem!important;">
  <option value="">Select Country</option>
  @foreach ($country as $_c)
    <option value="{{ $_c->code }}"
    @isset($user)
      @selected($_c->code === $user->country)
      @endisset>
      {{ $_c->name }}
    </option>
  @endforeach
</select>