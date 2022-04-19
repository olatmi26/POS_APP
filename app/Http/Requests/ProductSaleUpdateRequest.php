<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductSaleUpdateRequest extends FormRequest
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
            'sale_id' => ['integer', 'exists:sales,id'],
            'product_id' => ['required', 'integer', 'exists:products,id'],
            'stock_id' => ['integer', 'exists:stocks,id'],
            'ware_house_id' => ['integer', 'exists:ware_houses,id'],
            'variant_id' => ['integer', 'exists:variants,id'],
            'unit_id' => ['integer', 'exists:units,id'],
            'QtySold' => ['integer', 'gt:0'],
            'product_variant_id' => ['integer', 'exists:product_variants,id'],
            'totalPrice' => ['integer', 'gt:0'],
            'discountedAmount' => ['integer', 'gt:0'],
            'AmountPaid' => ['integer', 'gt:0'],
            'sale_status_id' => ['integer', 'exists:sale_statuses,id'],
        ];
    }
}
