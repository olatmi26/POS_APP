<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ware_house_id',
        'product_id',
        'product_variant_id',
        'variant_id',
        'unit_id',
        'UnitCostPrice',
        'UnitSalesPrice',
        'QtyInstock',
        'TotalCostPerUnit',
        'isActive',
        'alertQtyLevel',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ware_house_id' => 'integer',
        'product_id' => 'integer',
        'product_variant_id' => 'integer',
        'variant_id' => 'integer',
        'unit_id' => 'integer',
        'UnitCostPrice' => 'integer',
        'UnitSalesPrice' => 'integer',
        'isActive' => 'boolean',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wareHouse()
    {
        return $this->belongsTo(\App\Models\WareHouse::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(\App\Models\Product::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productVariant()
    {
        return $this->belongsTo(\App\Models\ProductVariant::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function variant()
    {
        return $this->belongsTo(\App\Models\Variant::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function unit()
    {
        return $this->belongsTo(\App\Models\Unit::class);
    }
}
