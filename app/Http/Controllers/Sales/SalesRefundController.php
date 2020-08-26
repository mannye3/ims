<?php

namespace App\Http\Controllers\Sales;

use App\Models\Customer;
use App\Models\SalesRefund;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SalesRefundController extends Controller
{
    public function index()
    {
        $saleRefunds = SalesRefund::latest()->get();
        $customers = Customer::latest()->get();

        return view('sales.sales_refund', compact('saleRefunds', 'customers'));
    }


    public function store(Request $request)
    {
        $refund = SalesRefund::create($request->all());

        return redirect()->back();
    }
}
