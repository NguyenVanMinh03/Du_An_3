<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormProduct extends FormRequest
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
            'mahang' => 'required|max:255',
            'name' => 'required|max:255',
            'hinhanh'=>'image',
            'price' => 'required|numeric|min:0',
            "old_price"=>'required|numeric|min:0',
            "khoiluong"=>'required|numeric|min:0',
            "desription"=>'required',




        ];
    }
    public function messages(): array
    {
        return [
            'mahang.required' => 'Trường này không được để trống',
            'name.required' => 'Trường này không được để trống',
            'hinhanh.image'=>'image',
            "price.required"=>"Trường này không được để trống",
            "old_price.required"=>"Trường này không được để trống",
            "khoiluong.required"=>"Trường này không được để trống",
            "desription.required"=>"Trường này không được để trống",

        ];
    }

}
