<?php

namespace App\Http\Requests\Shop;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseStoreRequest extends FormRequest
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
            'enteredBy:nullable' => ['required'],
            'reference_no' => ['required'],
            'PaidFromAccount:nullable' => ['required'],
            'ware_house_id:nullable' => ['required'],
            'totalQty:nullable' => ['required'],
            'TotalDiscount:nullable' => ['required'],
            'shippingCost' => ['required'],
            'grandTotal:nullable' => ['required'],
            'status:nullable' => ['required'],
            'paymentStatus:nullable' => ['required'],
            'AmountPaid:nullable' => ['required'],
            'payment_id:nullable' => ['required'],
            'InvoiceAttached:nullable' => ['required'],
            'Note:nullable' => ['required'],
            'isStocked:nullable' => ['required'],
            'isFromOneSupplier' => ['required'],
        ];
    }
}
