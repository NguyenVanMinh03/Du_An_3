<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormUser extends FormRequest
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
            "password"=>"required",
            "address"=>"required",
            'phone'=>"required|numeric",
            'hinhanh'=>"image",
            'email' => 'required|email',
        ];
    }
    public function messages(): array
    {
        return [
            "name.required"=>"Trường Này Không Được Để Trống",
            "password.required"=>"Trường Này Không Được Để Trống",
            "address.required"=>"Trường Này Không Được Để Trống",
            'phone.required'=>"Trường Này Không Được Để Trống",
            'hinhanh.image'=>"Trường Này Không Được Để Trống",
            'email.required' => 'Trường Này Không Được Để Trống',
        ];
    }
}
