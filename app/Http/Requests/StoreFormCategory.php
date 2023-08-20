<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormCategory extends FormRequest
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
            'img'=>"image"
        ];
    }

    public function messages(): array
    {
        return [
            "name.required"=>"Trường Này Không Được Để Trống",
            "desription.required"=>"Trường Này Không Để Trống",
            "img.image"=>"Trường Này Không Để Trống",
        ];
    }
}
