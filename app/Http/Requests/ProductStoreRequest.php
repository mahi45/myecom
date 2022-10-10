<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'category_id' => 'required|numeric',
            'name' => 'required|string|unique:products,name',
            'product_code' => 'required|string|unique:products,product_code',
            'product_price' => 'required|numeric|min:0',
            'product_image' => 'required|image|max:1024'
        ];
    }
}
