<?php

namespace App\Http\Controllers\Creditor;

use App\Models\SaleBatch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreditorController extends Controller
{
    public function index()
    {
        $creditors = SaleBatch::where('payment_method', 'credit')->get();

        return view('creditors.creditors', compact('creditors'));
    }
}
