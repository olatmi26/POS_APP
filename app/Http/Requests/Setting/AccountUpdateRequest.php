<?php

namespace App\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;

class AccountUpdateRequest extends FormRequest
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
            'name' => ['string'],
            'AccountN0' => ['string'],
            'isSetToDefault' => ['required'],
            'InitialBal' => ['numeric', 'gt:0'],
            'TotalBal' => ['numeric', 'gt:0'],
            'isActive' => [''],
        ];
    }
}
