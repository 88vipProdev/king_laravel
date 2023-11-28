<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class orderRequest extends FormRequest
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
            "user_id.required",
                "fullname.required",
                "fullname.max:10",
                "address.required",
                "sdt.required",
                "sdt.string",
                "nametour.required",
                "id_cart.required",
                "total_money.numeric",
                "status.required",
        ];
    }

    public function messages()
    {
        return([
            "user_id.required"=>"không được trống",
                "fullname.required"=>"tên không được để trống",
                "fullname.max"=>"tên không dài quá 10 ký tự",
                "address.required"=>"không để trống",
                "sdt.required"=>"không để trống",
                "sdt.string"=>"nhập số",
                "nametour.required"=>"không được trống",
                "id_cart.required"=>"không được trống",
                "total_money.numeric"=>"không được trống",
                "status.required"=>"không được trống"
        ]);
    }
}
