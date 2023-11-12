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
            "namedetail"=> "required",
            "review"=> "required",
            "file"=>"required|file|mimes:jpg,jpeg,png|max:2048",
            "location"=> "required",
            "price"=> "required|nummeric",
        ];
    }

    public function messages(): array
    {
        return [     
            "namedetail.required"=> "không được để trống",
            "review.required"=> "trường này không được để trống",
            " file.required"=> "không được bỏ trống",
            "file.mimes"=> "chỉ hỗ trợ cho jpg,jpeg,pnp,",
            "file.max"=> "kích thước tệp tối đa:2048",
            "location.required"=>"không được để trống",
            "price"=> "không được để trống",
            "price.nummeric"=>"kiểu số thực",
            ];
    }

}
