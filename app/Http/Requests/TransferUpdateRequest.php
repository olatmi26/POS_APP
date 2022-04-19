<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransferUpdateRequest extends FormRequest
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
            'user_id' => ['integer', 'exists:users,id', 'unique:transfers,user_id'],
            'refNo' => ['string', 'unique:transfers,refNo'],
            'ShippingCost' => ['integer', 'gt:0'],
            'GrandTotal' => ['integer', 'gt:0'],
            'documentAttached' => ['required', 'string'],
            'status' => ['required'],
            'AllIsReceived' => ['required'],
        ];
    }
}
