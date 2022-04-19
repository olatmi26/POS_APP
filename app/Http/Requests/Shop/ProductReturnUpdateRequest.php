<?php

namespace App\Http\Requests\Shop;

use Illuminate\Foundation\Http\FormRequest;

class ProductReturnUpdateRequest extends FormRequest
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
            'refNo' => ['string', 'unique:product_returns,refNo'],
            'TotalAmount' => ['integer', 'gt:0'],
            'ReturnedBy' => [''],
        ];
    }
}
