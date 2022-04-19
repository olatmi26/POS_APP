<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'enteredBy',
        'reference_no',
        'PaidFromAccount',
        'ware_house_id',
        'totalQty',
        'TotalDiscount',
        'shippingCost',
        'grandTotal',
        'status',
        'paymentStatus',
        'AmountPaid',
        'payment_id',
        'InvoiceAttached',
        'Note',
        'isStocked',
        'isFromOneSupplier',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'enteredBy' => 'integer',
        'PaidFromAccount' => 'integer',
        'ware_house_id' => 'integer',
        'TotalDiscount' => 'integer',
        'shippingCost' => 'integer',
        'grandTotal' => 'integer',
        'status' => 'boolean',
        'paymentStatus' => 'boolean',
        'AmountPaid' => 'integer',
        'payment_id' => 'integer',
        'isStocked' => 'boolean',
        'isFromOneSupplier' => 'boolean',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enteredBy()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function paidFromAccount()
    {
        return $this->belongsTo(\App\Models\Setting\Account::class);
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
    public function payment()
    {
        return $this->belongsTo(\App\Models\Settings\Payment::class);
    }
}
