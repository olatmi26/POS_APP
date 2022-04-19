<?php

namespace App\Http\Requests\Shop;

use Illuminate\Foundation\Http\FormRequest;

class ReturnItemUpdateRequest extends FormRequest
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
            'product_return_id' => ['required', 'integer', 'exists:product_returns,id'],
            'product_id' => ['integer', 'exists:products,id'],
            'variant_id' => ['integer', 'exists:variants,id'],
            'unit_id' => ['integer', 'exists:units,id'],
            'stock_id' => ['integer', 'exists:stocks,id'],
            'ware_house_id' => ['integer', 'exists:ware_houses,id'],
            'qty' => ['integer'],
            'amount' => ['integer', 'gt:0'],
        ];
    }
}
