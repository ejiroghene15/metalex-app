<select class="selectpicker" name="country" data-width="100%" required>
  <option value="">Select Country</option>
  @foreach ($country as $_c)
  <option value="{{ $_c->code }}" @isset($user) @if($_c->code === $user->country) selected @endif @endisset>
    {{ $_c->name }}
  </option>
  @endforeach
</select>