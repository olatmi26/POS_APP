<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductVariantUpdateRequest extends FormRequest
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
            'product_id' => ['integer', 'exists:products,id'],
            'variant_id' => ['integer', 'exists:variants,id'],
            'unit_id' => ['integer', 'exists:units,id'],
            'UnitCostPrice' => ['integer', 'gt:0'],
            'UnitSalesPrice' => ['integer', 'gt:0'],
        ];
    }
}
