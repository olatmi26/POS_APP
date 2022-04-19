<?php

namespace App\Http\Requests\Shop;

use Illuminate\Foundation\Http\FormRequest;

class StockStoreRequest extends FormRequest
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
            'ware_house_id' => ['integer', 'exists:ware_houses,id'],
            'product_id' => ['integer', 'exists:products,id'],
            'product_variant_id' => ['integer', 'exists:product_variants,id'],
            'variant_id' => ['integer', 'exists:variants,id'],
            'unit_id' => ['integer', 'exists:units,id'],
            'UnitCostPrice' => ['integer', 'gt:0'],
            'UnitSalesPrice' => ['integer', 'gt:0'],
            'QtyInstock' => ['integer'],
            'TotalCostPerUnit' => ['integer'],
            'isActive' => ['required'],
            'alertQtyLevel' => ['integer'],
            'ware_house_id' => ['integer', 'exists:ware_houses,id'],
            'product_id' => ['integer', 'exists:products,id'],
            'product_variant_id' => ['integer', 'exists:product_variants,id'],
            'variant_id' => ['integer', 'exists:variants,id'],
            'unit_id' => ['integer', 'exists:units,id'],
            'UnitCostPrice' => ['integer', 'gt:0'],
            'UnitSalesPrice' => ['integer', 'gt:0'],
            'QtyInstock' => ['integer'],
            'TotalCostPerUnit' => ['integer'],
            'isActive' => ['required'],
            'alertQtyLevel' => ['integer'],
            'ware_house_id' => ['integer', 'exists:ware_houses,id'],
            'product_id' => ['integer', 'exists:products,id'],
            'product_variant_id' => ['integer', 'exists:product_variants,id'],
            'variant_id' => ['integer', 'exists:variants,id'],
            'unit_id' => ['integer', 'exists:units,id'],
            'UnitCostPrice' => ['integer', 'gt:0'],
            'UnitSalesPrice' => ['integer', 'gt:0'],
            'QtyInstock' => ['integer'],
            'TotalCostPerUnit' => ['integer'],
            'isActive' => ['required'],
            'alertQtyLevel' => ['integer'],
            'ware_house_id' => ['integer', 'exists:ware_houses,id'],
            'product_id' => ['integer', 'exists:products,id'],
            'product_variant_id' => ['integer', 'exists:product_variants,id'],
            'variant_id' => ['integer', 'exists:variants,id'],
            'unit_id' => ['integer', 'exists:units,id'],
            'UnitCostPrice' => ['integer', 'gt:0'],
            'UnitSalesPrice' => ['integer', 'gt:0'],
            'QtyInstock' => ['integer'],
            'TotalCostPerUnit' => ['integer'],
            'isActive' => ['required'],
            'alertQtyLevel' => ['integer'],
            'ware_house_id' => ['integer', 'exists:ware_houses,id'],
            'product_id' => ['integer', 'exists:products,id'],
            'product_variant_id' => ['integer', 'exists:product_variants,id'],
            'variant_id' => ['integer', 'exists:variants,id'],
            'unit_id' => ['integer', 'exists:units,id'],
            'UnitCostPrice' => ['integer', 'gt:0'],
            'UnitSalesPrice' => ['integer', 'gt:0'],
            'QtyInstock' => ['integer'],
            'TotalCostPerUnit' => ['integer'],
            'isActive' => ['required'],
            'alertQtyLevel' => ['integer'],
            'ware_house_id' => ['integer', 'exists:ware_houses,id'],
            'product_id' => ['integer', 'exists:products,id'],
            'product_variant_id' => ['integer', 'exists:product_variants,id'],
            'variant_id' => ['integer', 'exists:variants,id'],
            'unit_id' => ['integer', 'exists:units,id'],
            'UnitCostPrice' => ['integer', 'gt:0'],
            'UnitSalesPrice' => ['integer', 'gt:0'],
            'QtyInstock' => ['integer'],
            'TotalCostPerUnit' => ['integer'],
            'isActive' => ['required'],
            'alertQtyLevel' => ['integer'],
            'ware_house_id' => ['integer', 'exists:ware_houses,id'],
            'product_id' => ['integer', 'exists:products,id'],
            'product_variant_id' => ['integer', 'exists:product_variants,id'],
            'variant_id' => ['integer', 'exists:variants,id'],
            'unit_id' => ['integer', 'exists:units,id'],
            'UnitCostPrice' => ['integer', 'gt:0'],
            'UnitSalesPrice' => ['integer', 'gt:0'],
            'QtyInstock' => ['integer'],
            'TotalCostPerUnit' => ['integer'],
            'isActive' => ['required'],
            'alertQtyLevel' => ['integer'],
            'ware_house_id' => ['integer', 'exists:ware_houses,id'],
            'product_id' => ['integer', 'exists:products,id'],
            'product_variant_id' => ['integer', 'exists:product_variants,id'],
            'variant_id' => ['integer', 'exists:variants,id'],
            'unit_id' => ['integer', 'exists:units,id'],
            'UnitCostPrice' => ['integer', 'gt:0'],
            'UnitSalesPrice' => ['integer', 'gt:0'],
            'QtyInstock' => ['integer'],
            'TotalCostPerUnit' => ['integer'],
            'isActive' => ['required'],
            'alertQtyLevel' => ['integer'],
            'ware_house_id' => ['integer', 'exists:ware_houses,id'],
            'product_id' => ['integer', 'exists:products,id'],
            'product_variant_id' => ['integer', 'exists:product_variants,id'],
            'variant_id' => ['integer', 'exists:variants,id'],
            'unit_id' => ['integer', 'exists:units,id'],
            'UnitCostPrice' => ['integer', 'gt:0'],
            'UnitSalesPrice' => ['integer', 'gt:0'],
            'QtyInstock' => ['integer'],
            'TotalCostPerUnit' => ['integer'],
            'isActive' => ['required'],
            'alertQtyLevel' => ['integer'],
        ];
    }
}
