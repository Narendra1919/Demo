<?php

namespace App\Http\Requests;

use Faker\Guesser\Name;
use Illuminate\Foundation\Http\FormRequest;

class BlogAddRequest extends FormRequest
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
            'auther_name'=>'required|alpha',
            'title'=>'required',
            'description'=>'required',
            'image'=>'required',
        ];
    }
    public function messages(): array
    {
          return[
              'auther_name.required'=> 'a title is required',
              'title.required'=> 'a title is required',
              'description.required'=> 'a title is required',
              'image.required'=> 'a title is required'
          ];
    }
}
