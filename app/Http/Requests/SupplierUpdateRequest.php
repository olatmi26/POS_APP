<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierUpdateRequest extends FormRequest
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
            'RefNo' => ['string', 'unique:suppliers,RefNo'],
            'name' => ['string'],
            'image' => ['string'],
            'company' => ['string'],
            'VatN0' => ['string', 'max:45', 'unique:suppliers,VatN0'],
            'email' => ['email', 'unique:suppliers,email'],
            'phoneN0' => ['string', 'max:12', 'unique:suppliers,phoneN0'],
            'address' => ['string'],
            'city' => ['string'],
            'state' => ['string'],
            'postalCode' => ['string'],
            'country' => ['string'],
            'is_active' => [''],
        ];
    }
}
