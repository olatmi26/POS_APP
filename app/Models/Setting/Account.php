<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'AccountN0',
        'isSetToDefault',
        'InitialBal',
        'TotalBal',
        'isActive',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'isSetToDefault' => 'boolean',
        'InitialBal' => 'double',
        'TotalBal' => 'double',
        'isActive' => 'boolean',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wareHouses()
    {
        return $this->hasMany(\App\Models\WareHouse::class);
    }
}
