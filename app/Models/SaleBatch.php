<?php

namespace App\Models;

use App\Models\Shop;
use App\Models\Stock;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;

class SaleBatch extends Model
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
        return $this->hasMany(Stock::class);
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
