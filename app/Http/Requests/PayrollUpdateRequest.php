<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PayrollUpdateRequest extends FormRequest
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
            'refNo' => ['string', 'unique:payrolls,refNo'],
            'user_id' => ['integer', 'exists:users,id'],
            'employee_id' => ['integer', 'exists:employees,id'],
            'account_id' => ['integer', 'exists:accounts,id'],
            'payment_id' => ['integer', 'exists:payments,id'],
            'note' => ['string'],
            'PeriodPaid' => ['date'],
            'amount' => ['string'],
        ];
    }
}
