<?php

namespace App\Models;

use App\Models\Shop;
use App\Models\Stock;
use Illuminate\Database\Eloquent\Model;

class PrePurchase extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'shop_id', 'stock_id', 'product_code', 'quantity', 'unit_cost', 'cost_amount'
    ];

    /** Relationship 8*/
    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
