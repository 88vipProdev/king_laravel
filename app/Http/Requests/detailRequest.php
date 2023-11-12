<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class detailRequest extends FormRequest
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
            "namedetail" => "required",
            "review" => "required",
            "image"=> 'required|file|mimes:jpg,jpeg,png|max:2048',
            "location" => "required",
            "price" => "required|numeric",
            "productId"=> "required",
        ];
    }

    public function messages(): array
    {
        return [     
            "namedetail.required" => "không được để trống ",
            "review.required" => "Trường này không được để trống",
            "file.required" => "Trường này không được để trống",
            "file.mimes" => "Chỉ hỗ trợ cho định dạng jpg, jpeg, png",
            "file.max" => "Kích thước tệp tối đa: 2048",
            "location.required" => "Trường này không được để trống",
            "price.required" => "Trường này không được để trống",
            "price.numeric" => "Giá trị phải là số",
            "productId.required"=> "Không được để trống",
        ];
    }
                
}
