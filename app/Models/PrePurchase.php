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
    protected $guarded = [];

    /** Relationship */
    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
