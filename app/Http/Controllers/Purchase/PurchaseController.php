<?php

namespace App\Http\Controllers\Purchase;

use App\Models\Shop;
use App\Models\Stock;
use App\Models\Purchase;
use App\Models\TempOrder;
use App\Models\PrePurchase;
use Illuminate\Http\Request;
use App\Models\PurchaseBatch;
use App\Models\CarriageInward;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PurchaseController extends Controller
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
    public function index()
    {
        // Get Shop
        $purchases = PurchaseBatch::all();

        return view('purchase.item', compact('purchases'));
    }


    /**
     * Purchase details.
     *
     * @return \Illuminate\Http\Response
     */
    public function purchaseDetails($reference)
    {
        $purchase = Purchase::where('reference_no', $reference)->get();

        $batch = PurchaseBatch::where('reference_no', $reference)->first();

        $carriage = CarriageInward::where('reference_no', $reference)->pluck('price');
        $sumCarriage = $carriage->sum();

        return view('purchase.purchase_details', compact('purchase', 'batch', 'sumCarriage'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // Get Shop
        $shops = Shop::all();
        $stocks = Stock::all();
        $orders = PrePurchase::where('user_id', auth()->user()->id)->get();

        $totalCost = 0;
        foreach ($orders as $value) {
            $cost = $value->quantity * $value->price;
            $totalCost += $cost;
        }

        return  view('purchase.new_purchase', compact('shops', 'stocks', 'orders', 'totalCost'));
    }


    public function processPurchase(Request $request)
    {
        $stock = Stock::find($request->stock_id);
        
        $saved = PrePurchase::create([
            'user_id' => auth()->user()->id,
            'stock_id' => $request->stock_id,
            'quantity' => $request->quantity,
            'price' => $stock->selling_price,
            // 'reference' => $reference
        ]);

        return redirect()->back();
    }


    /** Delete single product from list */
    public function removeProduct($id)
    {
        $order = PrePurchase::find($id)->delete();

        return redirect()->back();
    }



    public function PurchasePriceUpdate(Request $request, $id)
    {
        $purchaseOrder = PrePurchase::find($id);

        $purchaseOrder->update(['price' => $request->newPrice]);

        return redirect()->back();
    }

    public function resetPurhase()
    {
        $order = PrePurchase::where('user_id', auth()->user()->id)->delete();

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $purchase = PrePurchase::where('user_id', auth()->user()->id)->get();

        // REFERENCE NO
        $reference = str_random(15);

        foreach ($purchase as $value) {
            // $stock = Stock::where('id', $value->stock_id)
            //                 // ->where('shop_id', $value->shop_id)
            //                 ->first();              
            // $totalQnty = $stock->quantity + $value->quantity;
            // // Update quantity
            // $stock->update(['quantity' => $totalQnty]);

            // Save Purchase
            Purchase::create([
                'shop_id' => $request->shop_id,
                'quantity' => $value->quantity,
                'price' => $value->price,
                'stock_id' => $value->stock_id,
                'payment_method' => $request->paymentMethod,
                'reference_no' => $reference
            ]);
        }

        
        $allQnty = $purchase->sum('quantity');
        $allprice = $purchase->sum('price');
        $allcount = $purchase->count();

        PurchaseBatch::create([
            'user_id' => auth()->user()->id,
            'shop_id' => $request->shop_id,
            'total_cost' => $allprice,
            'reference_no' => $reference,
            'payment_method' => $request->paymentMethod,
            'amount_paid' => $request->amount_paid
        ]);

        // Clear tempOrder
        PrePurchase::where('user_id', auth()->user()->id)->delete();

        return redirect('/purchase');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
