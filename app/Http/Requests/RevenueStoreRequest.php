<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RevenueStoreRequest extends FormRequest
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
            'account_id' => ['integer', 'exists:accounts,id'],
            'totalRevenue' => ['integer', 'gt:0'],
            'income' => ['integer', 'gt:0'],
            'expenses' => ['integer', 'gt:0'],
            'account_id' => ['integer', 'exists:accounts,id'],
            'totalRevenue' => ['integer', 'gt:0'],
            'income' => ['integer', 'gt:0'],
            'expenses' => ['integer', 'gt:0'],
            'account_id' => ['integer', 'exists:accounts,id'],
            'totalRevenue' => ['integer', 'gt:0'],
            'income' => ['integer', 'gt:0'],
            'expenses' => ['integer', 'gt:0'],
            'account_id' => ['integer', 'exists:accounts,id'],
            'totalRevenue' => ['integer', 'gt:0'],
            'income' => ['integer', 'gt:0'],
            'expenses' => ['integer', 'gt:0'],
        ];
    }
}
