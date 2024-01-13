<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
            'mobile'=>'required',
            'email'=>'required',
            'password'=>'required'
        ];
    }
    public function messages(): array
    {
          return[
              'name.required'=> 'a title is required',
              'mobile.required'=> 'a title is required',
              'email.required'=> 'a title is required',
              'password.required'=> 'a title is required'
          ];
    }
}
