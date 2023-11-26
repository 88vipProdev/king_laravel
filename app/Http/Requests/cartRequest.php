<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class cartRequest extends FormRequest
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
            "image"=> 'required|file|mimes:jpg,jpeg,png|max:2048',
        ];
    }

    public function messages()
    { 

            return [
                        
                "file.required"=> "Trường này không được để trống",
                "file.mimes" => "Chỉ hỗ trợ cho định dạng jpg, jpeg, png",
                "file.max" => "Kích thước tệp tối đa: 2048",
            ];

    }
}
