<?php

namespace App\Http\Requests\Shop;

use Illuminate\Foundation\Http\FormRequest;

class ProductPurchaseUpdateRequest extends FormRequest
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
            'purchase_id' => ['integer', 'exists:purchases,id'],
            'product_id' => ['integer', 'exists:products,id'],
            'unit_id' => ['integer', 'exists:units,id'],
            'variant_id' => ['integer', 'exists:variants,id'],
            'supplier_id' => ['integer', 'exists:suppliers,id'],
            'unitCost' => ['integer', 'gt:0'],
            'Qty' => ['integer', 'gt:0'],
            'TotalCost' => ['integer', 'gt:0'],
        ];
    }
}
