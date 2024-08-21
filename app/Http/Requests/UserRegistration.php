<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegistration extends FormRequest
{
  /**
   * Indicates if the validator should stop on the first rule failure.
   *
   * @var bool
   */
  protected $stopOnFirstFailure = true;

  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, mixed>
   */
  public function rules()
  {
    return [
      'first_name' => 'required',
      'last_name' => 'required',
      'email' => 'bail|required|email|unique:users',
      'password' => 'bail|required|min:6|confirmed',
      'i_agree' => 'accepted',
      'user_type' => 'nullable',
    ];
  }

  /**
   * Get the error messages for the defined validation rules.
   *
   * @return array
   */
  public function messages()
  {
    return [
      'password.confirmed' => 'Password does not match with confirm password',
      'email.unique' => 'An account with this :attribute already exists',
      'i_agree.accepted' => 'You have to agree to our terms of service'
    ];
  }

  /**
   * Get custom attributes for validator errors.
   *
   * @return array
   */
  public function attributes()
  {
    return [
      'email' => 'Email Address',
      'first_name' => 'First Name',
      'last_name' => 'Last Name',
      'country' => 'Country',
      'state' => 'State',
      'password_confirmation' => 'Confirm Password'
    ];
  }
}
