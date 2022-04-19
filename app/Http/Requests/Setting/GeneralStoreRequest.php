<?php

namespace App\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;

class GeneralStoreRequest extends FormRequest
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
            'siteTitle' => ['string', 'max:160'],
            'siteLogo' => ['string', 'max:180'],
            'currency' => ['string', 'max:20'],
            'currencyPosition' => ['integer', 'gt:0'],
            'staffAccess' => [''],
            'dateFormat' => ['string'],
            'theme' => ['string'],
            'developedBy' => ['string', 'max:160'],
            'invoiceFormat' => ['string'],
            'status' => ['integer', 'gt:0'],
        ];
    }
}
