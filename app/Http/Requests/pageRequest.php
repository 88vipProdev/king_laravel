<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Utils\FileLoader;
class pageRequest extends FormRequest
{   
   
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
            "title"=> "required|min:6",
            "content"=> "required|min:30",
            "file"=> "'file' => 'required|file|mimes:jpg,jpeg,png|max:2048",
        ];
    }
    public function messages(): array
    {
        return [
            "title.required"=> "không được bỏ trống",
            "title.min"=> "không được nhỏ hơn 6 ký tự",
            "content.required"=> "không được bỏ trống",
            "content.min"=> "không được nhỏ hơn 30 ký tự",
            "file.required"=> "không được bỏ trống",
            "file.mimes"=> "định dạng file không hợp lệ",
            "file.max"=> "không được lớn hơn 2048 px ",
            
        ];

    }


}






















































































































































































































































































































