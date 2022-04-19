<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockInPurchased extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_purchase_id',
        'ware_house_id',
        'stock_id',
        'qty',
        'prepareBy',
        'receivedBy',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_purchase_id' => 'integer',
        'ware_house_id' => 'integer',
        'stock_id' => 'integer',
        'qty' => 'integer',
        'prepareBy' => 'integer',
        'receivedBy' => 'integer',
        'status' => 'boolean',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productPurchase()
    {
        return $this->belongsTo(ProductPurchase::class);
    }

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
    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function prepareBy()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function receivedBy()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
