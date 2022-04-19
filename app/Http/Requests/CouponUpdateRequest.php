<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponUpdateRequest extends FormRequest
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
            'code' => ['string', 'max:40'],
            'amount' => ['integer', 'gt:0'],
            'minAmount' => ['integer', 'gt:0'],
            'Qty' => ['integer', 'gt:0'],
            'isUsed' => ['required'],
            'expiredDate' => [''],
            'isActive' => ['required'],
        ];
    }
}
