<?php

namespace App\Models;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'shop_id', 'quantity', 'name', 'price'
    ];


    /** Relationship 8*/
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
