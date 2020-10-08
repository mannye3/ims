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


    /**
     * pay debt
     */
    public function payDebt(Request $request, $id)
    {
        $creditors = SaleBatch::findOrFail($id);

        $creditors->update([
            'amount_paid'=> $creditors->amount_paid + $request->amount_paid,
            'payment_method'=> 'paid'
        ]);

        return redirect('/creditors');

    }
}
