<?php

namespace App\Http\Controllers\Purchase;

use Illuminate\Http\Request;
use App\Models\CarriageInward;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CarriageInwardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $reference)
    {
        CarriageInward::create([
            'reference_no' => $reference,
            'title' => $request->purpose,
            'price' => $request->price,
            'user_id' => auth()->user()->id,
            'purchase_id' => $request->purchase_id
        ]);

        return redirect()->back();
    }
}
