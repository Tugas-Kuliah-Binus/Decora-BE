<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'type' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'style' => 'required|string|max:255',
            'berat' => 'required|numeric',
            'panjang_product' => 'required|numeric',
            'lebar_product' => 'required|numeric',
            'tinggi_product' => 'required|numeric'
        ];
    }
}
