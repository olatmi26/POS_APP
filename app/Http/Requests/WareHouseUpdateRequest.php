<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WareHouseUpdateRequest extends FormRequest
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
            'code' => ['required', 'string', 'unique:ware_houses,code'],
            'phone' => ['required', 'string', 'max:12'],
            'email' => ['required', 'email', 'max:120'],
            'address' => ['required', 'string'],
            'is_active' => ['required'],
        ];
    }
}
