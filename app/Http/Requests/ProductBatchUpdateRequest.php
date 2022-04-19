<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductBatchUpdateRequest extends FormRequest
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
            'BatchNo' => ['string', 'max:60', 'unique:product_batches,BatchNo'],
            'DateManufactured' => ['date'],
            'ExpiredDate' => ['date'],
        ];
    }
}
