<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'siteTitle',
        'siteLogo',
        'currency',
        'currencyPosition',
        'staffAccess',
        'dateFormat',
        'theme',
        'developedBy',
        'invoiceFormat',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'currencyPosition' => 'integer',
        'staffAccess' => 'boolean',
        'status' => 'integer',
    ];
}
