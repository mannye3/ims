<?php

namespace App\Http\Controllers\CashMovement;

use App\Models\Shop;
use App\Models\SaleBatch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CashMovementController extends Controller
{
    public function index()
    {
        $sales = SaleBatch::all();
        $shops = Shop::all();

        return view('cash_movement.cash_movement', compact(
            'shops', 'sales'
        ));
    }
}
