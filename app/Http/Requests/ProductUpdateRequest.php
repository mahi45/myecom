<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
            'name' => 'required|string',
            'product_code' => 'required|string',
            'product_price' => 'required|numeric|min:0',
            'product_image' => 'nullable|image|max:1024'
        ];
    }
}
