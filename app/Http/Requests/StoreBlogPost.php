<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
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
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, mixed>
   */
  public function rules(): array
  {
    return [
      'thumbnail' => 'sometimes|required|mimes:png,jpg,jpeg|max:1024',
      'title' => 'required|max:255',
      'body' => 'required',
      'category' => 'exists:blog_categories,id'
    ];
  }

  public function messages(): array
  {
    return [
      'thumbnail.max' => 'Thumbnail size should not be more than 1MB',
      'category.exists' => "The category under which you're creating your article does not exist"
    ];
  }

}
