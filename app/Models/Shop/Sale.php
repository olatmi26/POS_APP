<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'soldBy',
        'reference_no',
        'cash_register_id',
        'customer_id',
        'ware_house_id',
        'totalQty',
        'coupon_id',
        'TotalDiscount',
        'shippingCost',
        'grandTotal',
        'status',
        'paymentStatus',
        'AmountPaid',
        'ReturnChangedPaid',
        'document',
        'Note',
        'payment_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'soldBy' => 'integer',
        'customer_id' => 'integer',
        'ware_house_id' => 'integer',
        'coupon_id' => 'integer',
        'TotalDiscount' => 'integer',
        'shippingCost' => 'integer',
        'grandTotal' => 'integer',
        'status' => 'boolean',
        'paymentStatus' => 'boolean',
        'AmountPaid' => 'integer',
        'ReturnChangedPaid' => 'integer',
        'payment_id' => 'integer',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function soldBy()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo(\App\Models\Customer::class);
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
    public function coupon()
    {
        return $this->belongsTo(\App\Models\Coupon::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function payment()
    {
        return $this->belongsTo(\App\Models\Settings\Payment::class);
    }
}
