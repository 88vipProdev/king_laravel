<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class loginRequest extends FormRequest
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
            "email"=> "required|email",
            "password"=> "required",
        ];
    }
    public function messages(): array
    {
        return [
            "email.required"=> "không được để trống",
            "email.exists"=> "email chưa được đăng ký",
            "password.required"=> "không được để trống",
            "password.exists"=>"mật khẩu không tông tại",
        ];
    }

  
    public function validateCredentials(){
        $users = Auth::User();

        if (!$users || !Hash::check($this->input('password'), $users->password)) {
            return false;
        }
        return true;
    }
}
