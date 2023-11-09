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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "namecategory"=> "required|min:3",
        ];
    }

    public function messages(): array
    {
        return [
            "namecategory.required"=> "không được bỏ trống",
            "namecategory.min"=> "không được nhỏ hơn min : ký tự ",
        ];
    }
}
