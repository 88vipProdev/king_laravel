<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class RegisterRequest extends FormRequest
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
            "username" =>[
                "required",
                "min:6",
                "max:255",
                Rule::unique("users")->where(function ($query) {
                    return $query->whereNull("deleted_at");

                }),
            ],
            "email"=> [
                "required",
                "email",
                "ends_with:@gmail.com",
                    Rule::unique("users")->where(function ($query) {
                        return $query->whereNotNull("deleted_at");
                    }),
                ],
                "password"=> "required|min:6|confirmed",
                    
        ];


    }

    public function messages(): array
    {

        return [ 
            "username.required"=>"vui long nhập tên người dùng.",
            "username.min"=> "username phải chứa ít nhất 6 ký tự  ",
            "username.max"=> "username không đc vượt quá 255 ký tự",
            "username.unique"=>"tài khoản đã tồn tại . vui lòng nhập lại",
            "email.required" => "vui lòng nhập địa chỉ email",
            "email.unique"=> "email đã tồn tại vui lòng nhập lại ",
            "email.ends_with"=> "email không hợp lệ",
            "password.required"=> "vui lòng nhập mật khẩu ",
            "password.min"=> "mật khẩu phải chứa ít nhất 6 ký tự ",
            "password.confirmed"=> "mật khẩu xác nhận không khớp",
        ];
    }

    
}
