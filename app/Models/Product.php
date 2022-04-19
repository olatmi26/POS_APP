<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'code',
        'brand_id',
        'category_id',
        'unit_id',
        'UnitCostPrice',
        'UnitSalesPrice',
        'tax_id',
        'tax_method_id',
        'image',
        'is_batch',
        'is_variant',
        'featured',
        'details',
        'is_active',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'brand_id' => 'integer',
        'category_id' => 'integer',
        'unit_id' => 'integer',
        'UnitCostPrice' => 'integer',
        'UnitSalesPrice' => 'integer',
        'tax_id' => 'integer',
        'tax_method_id' => 'integer',
        'is_batch' => 'boolean',
        'is_variant' => 'boolean',
        'featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function units()
    {
        return $this->belongsToMany(Unit::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function wareHouses()
    {
        return $this->belongsToMany(WareHouse::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tax()
    {
        return $this->belongsTo(\App\Models\Setting\Tax::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function taxMethod()
    {
        return $this->belongsTo(\App\Models\Setting\TaxMethod::class);
    }
}
