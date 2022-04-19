<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductTransferStoreRequest extends FormRequest
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
            'transfer_id' => ['integer', 'exists:transfers,id'],
            'product_id' => ['integer', 'exists:products,id'],
            'FromWareHouse' => [''],
            'transfer_id' => ['integer', 'exists:transfers,id'],
            'product_id' => ['integer', 'exists:products,id'],
            'variant_id' => ['integer', 'exists:variants,id'],
            'unit_id' => ['integer', 'exists:units,id'],
            'FromWareHouse' => [''],
            'ToWareHouse' => [''],
            'stock_id' => ['integer', 'exists:stocks,id'],
            'Qty' => ['integer', 'gt:0'],
            'Price' => ['integer'],
            'TotalPrice' => ['integer'],
            'isReceived' => ['required'],
            'ReceivedBy' => ['unique:product_transfers,ReceivedBy'],
            'transfer_id' => ['integer', 'exists:transfers,id'],
            'product_id' => ['integer', 'exists:products,id'],
            'variant_id' => ['integer', 'exists:variants,id'],
            'unit_id' => ['integer', 'exists:units,id'],
            'FromWareHouse' => [''],
            'ToWareHouse' => [''],
            'stock_id' => ['integer', 'exists:stocks,id'],
            'Qty' => ['integer', 'gt:0'],
            'Price' => ['integer'],
            'TotalPrice' => ['integer'],
            'isReceived' => ['required'],
            'ReceivedBy' => ['unique:product_transfers,ReceivedBy'],
            'Qty' => ['integer', 'gt:0'],
            'transfer_id' => ['integer', 'exists:transfers,id'],
            'product_id' => ['integer', 'exists:products,id'],
            'variant_id' => ['integer', 'exists:variants,id'],
            'unit_id' => ['integer', 'exists:units,id'],
            'FromWareHouse' => [''],
            'ToWareHouse' => [''],
            'stock_id' => ['integer', 'exists:stocks,id'],
            'Qty' => ['integer', 'gt:0'],
            'Price' => ['integer'],
            'TotalPrice' => ['integer'],
            'isReceived' => ['required'],
            'ReceivedBy' => ['unique:product_transfers,ReceivedBy'],
            'transfer_id' => ['integer', 'exists:transfers,id'],
            'product_id' => ['integer', 'exists:products,id'],
            'variant_id' => ['integer', 'exists:variants,id'],
            'unit_id' => ['integer', 'exists:units,id'],
            'FromWareHouse' => [''],
            'ToWareHouse' => [''],
            'stock_id' => ['integer', 'exists:stocks,id'],
            'Qty' => ['integer', 'gt:0'],
            'Price' => ['integer'],
            'TotalPrice' => ['integer'],
            'isReceived' => ['required'],
            'ReceivedBy' => ['unique:product_transfers,ReceivedBy'],
            'transfer_id' => ['integer', 'exists:transfers,id'],
            'product_id' => ['integer', 'exists:products,id'],
            'variant_id' => ['integer', 'exists:variants,id'],
            'unit_id' => ['integer', 'exists:units,id'],
            'FromWareHouse' => [''],
            'ToWareHouse' => [''],
            'stock_id' => ['integer', 'exists:stocks,id'],
            'Qty' => ['integer', 'gt:0'],
            'Price' => ['integer'],
            'TotalPrice' => ['integer'],
            'isReceived' => ['required'],
            'ReceivedBy' => ['unique:product_transfers,ReceivedBy'],
            'transfer_id' => ['integer', 'exists:transfers,id'],
            'product_id' => ['integer', 'exists:products,id'],
            'variant_id' => ['integer', 'exists:variants,id'],
            'unit_id' => ['integer', 'exists:units,id'],
            'FromWareHouse' => [''],
            'ToWareHouse' => [''],
            'stock_id' => ['integer', 'exists:stocks,id'],
            'Qty' => ['integer', 'gt:0'],
            'Price' => ['integer'],
            'TotalPrice' => ['integer'],
            'isReceived' => ['required'],
            'ReceivedBy' => ['unique:product_transfers,ReceivedBy'],
            'transfer_id' => ['integer', 'exists:transfers,id'],
            'product_id' => ['integer', 'exists:products,id'],
            'variant_id' => ['integer', 'exists:variants,id'],
            'unit_id' => ['integer', 'exists:units,id'],
            'FromWareHouse' => [''],
            'ToWareHouse' => [''],
            'stock_id' => ['integer', 'exists:stocks,id'],
            'Qty' => ['integer', 'gt:0'],
            'Price' => ['integer'],
            'TotalPrice' => ['integer'],
            'isReceived' => ['required'],
            'ReceivedBy' => ['unique:product_transfers,ReceivedBy'],
            'transfer_id' => ['integer', 'exists:transfers,id'],
            'product_id' => ['integer', 'exists:products,id'],
            'variant_id' => ['integer', 'exists:variants,id'],
            'unit_id' => ['integer', 'exists:units,id'],
            'FromWareHouse' => [''],
            'ToWareHouse' => [''],
            'stock_id' => ['integer', 'exists:stocks,id'],
            'Qty' => ['integer', 'gt:0'],
            'Price' => ['integer'],
            'TotalPrice' => ['integer'],
            'isReceived' => ['required'],
            'ReceivedBy' => ['unique:product_transfers,ReceivedBy'],
        ];
    }
}
