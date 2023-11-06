<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productCreate extends FormRequest
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
                "name"=> "required",
                "location"=>"required",
                "price"=> "required|numeric",
                "file"=> "'file' => 'required|file|mimes:jpg,jpeg,png|max:2048",
        ];
    }

    public function messages(): array
    {
        return [
            "name.required"=> "không được bỏ trống",
            "location.request"=> "không được để trống ",
            "price.required"=> "không được để trống ",
            "price.numeric"=> "phải là kiểu số thực",
            "file.required"=> "không được bỏ trống ",
        ];
    }
}
