<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerUpdateRequest extends FormRequest
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
            'customer_group_id' => ['integer', 'exists:customer_groups,id'],
            'user_id' => ['integer', 'exists:users,id'],
            'FullName' => ['string'],
            'company_name' => ['string'],
            'email' => ['email'],
            'phoneN0' => ['string', 'max:12'],
            'tax_no' => ['string', 'unique:customers,tax_no'],
            'address' => ['string'],
            'city' => ['string'],
            'state' => ['string'],
            'postal_code' => ['string'],
            'country' => ['string'],
            'deposit' => ['string'],
            'expense' => ['string'],
            'is_active' => [''],
        ];
    }
}
