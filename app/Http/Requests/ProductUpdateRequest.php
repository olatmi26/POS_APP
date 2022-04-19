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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['string'],
            'code' => ['string', 'max:14', 'unique:products,code'],
            'brand_id' => ['integer', 'exists:brands,id'],
            'category_id' => ['integer', 'exists:categories,id'],
            'unit_id' => ['integer', 'exists:units,id'],
            'UnitCostPrice' => ['integer', 'gt:0'],
            'UnitSalesPrice' => ['integer', 'gt:0'],
            'tax_id' => ['integer', 'exists:taxes,id'],
            'tax_method_id' => ['integer', 'exists:tax_methods,id'],
            'image' => ['string'],
            'is_batch' => ['required'],
            'is_variant' => ['required'],
            'featured' => ['required'],
            'details' => ['required', 'string'],
            'is_active' => ['required'],
        ];
    }
}
