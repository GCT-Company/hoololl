<?php

namespace App\Http\Requests\User;

use App\Rules\MatchEmailRule;
use Illuminate\Foundation\Http\FormRequest;

class ForgetPasswordRequest extends FormRequest
{
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
   * @return array
   */
  public function rules()
  {
    return [
      'email_address' => [
        'required',
        'email:rfc,dns',
        new MatchEmailRule('user')
      ]
    ];
  }
}
