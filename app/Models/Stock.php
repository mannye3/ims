<?php

namespace App\Models;

use App\Models\Shop;
use App\Models\Stock;
use App\Models\TempOrder;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];


    /** Relationship 8*/
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function purchase()
    {
        return $this->hasMany(Purchase::class);
    }
}
