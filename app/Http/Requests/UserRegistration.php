<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

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
      'country' => 'required',
      'state' => 'required',
      'i_agree' => 'accepted',
      'zip_code' => 'nullable',
      'user_type' => 'nullable',
      'firm_name' => 'exclude_unless:user_type,firm|required',
      'physical_office_address' => 'exclude_unless:user_type,firm|required',
      'offers_probono' => 'exclude_if:user_type,client|required',
      'specialization' => 'exclude_if:user_type,client|required',
      'year_of_call' => 'exclude_unless:user_type,lawyer|required',
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
