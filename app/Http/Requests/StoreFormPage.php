<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormPage extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
//    public function authorize(): bool
//    {
//        return false;
//    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "name"=>"required",
            "desription"=>"required",
            "tacgia"=>"required",

            'img'=>"image"
        ];
    }
    public function messages(): array
    {
        return [
            "name.required"=>"Trường này không được để trống",
            "desription.required"=>"Trường này không được để trống",
            "tacgia.required"=>"Trường này không được để trống",

            'img.required'=>"Trường này không được để trống"
        ];
    }
}
