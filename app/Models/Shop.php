<?php

namespace App\Models;

use App\Models\User;
use App\Models\Stock;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'location', 'address',
    ];

    /** Relationship 8*/
    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }

    public function user()
    {
        return $this->hasMany(User::class, 'shop_id');
    }
}
