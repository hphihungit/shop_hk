<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'file' => 'required',
            'price' => 'required|min:0',
            'price_sale' => 'min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Vui lòng nhập tên sản phẩm',
            'file.required' => 'Vui lòng nhập ảnh sản phẩm',
            'price.required' => 'Vui lòng nhập giá sản phẩm',
            'price.min' => 'Giá sản phẩm không được âm',
            'price_sale.min' => 'Giá giảm không được âm'
        ];
    }
}
