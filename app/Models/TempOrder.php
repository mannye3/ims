<?php

namespace App\Models;

use App\Models\Stock;
use Illuminate\Database\Eloquent\Model;

class TempOrder extends Model
{
    protected $guarded = [''];

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }
}
