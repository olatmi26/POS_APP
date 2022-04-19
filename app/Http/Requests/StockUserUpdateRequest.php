<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StockUserUpdateRequest extends FormRequest
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
            'stock_id' => ['integer', 'exists:stocks,id'],
            'user_id' => ['integer', 'exists:users,id'],
            'isDecreaseStock' => [''],
            'isIncreaseStock' => [''],
            'ByWhatQty' => ['integer', 'gt:0'],
        ];
    }
}
