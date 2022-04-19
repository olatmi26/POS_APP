<?php

namespace App\Http\Requests\Shop;

use Illuminate\Foundation\Http\FormRequest;

class StockInPurchasedUpdateRequest extends FormRequest
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
            'product_purchase_id' => ['integer', 'exists:product_purchases,id'],
            'ware_house_id' => ['integer', 'exists:ware_houses,id'],
            'stock_id' => ['integer', 'exists:stocks,id'],
            'qty' => ['integer', 'gt:0'],
            'prepareBy' => [''],
            'receivedBy' => [''],
            'status' => [''],
        ];
    }
}
