<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarcodeProductStoreRequest extends FormRequest
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
            'barcode_id' => ['integer', 'exists:barcodes,id'],
            'product_id' => ['integer', 'exists:products,id'],
            'barcode_id' => ['integer', 'exists:barcodes,id'],
            'product_id' => ['integer', 'exists:products,id'],
            'product_variant_id' => ['integer', 'exists:product_variants,id'],
            'code' => ['string', 'unique:barcode_products,code'],
            'code' => ['string', 'unique:barcode_products,code'],
        ];
    }
}
