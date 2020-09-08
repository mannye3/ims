<?php

namespace App\Http\Controllers\Report;

use App\Models\Sale;
use Illuminate\Http\Request;
use App\Models\PurchaseBatch;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;

class ReportController extends Controller
{
    public function index()
    {
        $sales = Sale::all();

        // $purchase = PurchaseBatch::all();

        // $salesRes = Collect($sales);
        // $purchaseRes = Collect($purchase);

        // $transactions = array_merge($salesRes, $purchaseRes);

        return view('report.transactions', compact('sales'));
    }
}
