<?php

namespace App\Models;

use App\Models\Shop;
use App\Models\Stock;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /** Relationship 8*/
    public function stocks()
    {
        return $this->belongsTo(Stock::class, 'stock_id');
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
