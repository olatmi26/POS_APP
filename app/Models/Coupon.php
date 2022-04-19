<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'amount',
        'minAmount',
        'Qty',
        'isUsed',
        'expiredDate',
        'isActive',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'amount' => 'integer',
        'minAmount' => 'integer',
        'Qty' => 'integer',
        'isUsed' => 'boolean',
        'expiredDate' => 'datetime',
        'isActive' => 'boolean',
    ];
}
