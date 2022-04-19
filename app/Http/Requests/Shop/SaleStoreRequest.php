<?php

namespace App\Http\Requests\Shop;

use Illuminate\Foundation\Http\FormRequest;

class SaleStoreRequest extends FormRequest
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
            'soldBy' => ['required'],
            'reference_no' => ['required'],
            'cash_register_id' => ['required'],
            'customer_id' => ['required'],
            'ware_house_id' => ['required'],
            'totalQty:nullable' => ['required'],
            'coupon_id:nullable' => ['required'],
            'TotalDiscount:nullable' => ['required'],
            'shippingCost:nullable' => ['required'],
            'grandTotal:nullable' => ['required'],
            'status:nullable' => ['required'],
            'paymentStatus:nullable' => ['required'],
            'AmountPaid:nullable' => ['required'],
            'ReturnChangedPaid:nullable' => ['required'],
            'document:nullable' => ['required'],
            'Note:nullable' => ['required'],
            'payment_id:nullable' => ['required'],
        ];
    }
}
