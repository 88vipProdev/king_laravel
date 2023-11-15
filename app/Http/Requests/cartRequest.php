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
            'cart_id' => 'required|exists:carts,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            "image"=> 'required|file|mimes:jpg,jpeg,png|max:2048',
        ];
    }
    public function messages(): array
    {
        return [
            'cart_id.required' => 'Trường cart_id là bắt buộc.',
            'cart_id.exists' => 'Cart không hợp lệ.',
            'product_id.required' => 'Trường product_id là bắt buộc.',
            'product_id.exists' => 'Product không hợp lệ.',
            'quantity.required' => 'Trường quantity là bắt buộc.',
            'quantity.integer' => 'Trường quantity phải là một số nguyên.',
            'quantity.min' => 'Trường quantity phải lớn hơn hoặc bằng 1.',
        ];
    }
   
    
}
