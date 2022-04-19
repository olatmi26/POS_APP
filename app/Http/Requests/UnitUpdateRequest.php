<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnitUpdateRequest extends FormRequest
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
            'code' => ['string', 'unique:units,code'],
            'baseVal' => ['integer', 'gt:0'],
            'operator' => ['string'],
            'operationVal' => ['integer', 'gt:0'],
            'is_active' => ['required'],
        ];
    }
}
