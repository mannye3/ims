<?php

namespace App\Http\Controllers\Sales;

use App\Models\Sale;
use App\Models\Shop;
use App\Models\Stock;
use App\Models\PreSale;
use App\Models\Customer;
use App\Models\SaleBatch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SaleController extends Controller
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
        $sales = SaleBatch::all();

        return view('sales.sales', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Get Shop
        $shops = Shop::all();
        $stocks = Stock::where('quantity', '>', 0)->get();
        $orders = PreSale::where('user_id', auth()->user()->id)->get();
        $customers = Customer::all();

        $totalCost = 0;
        foreach ($orders as $value) {
            $cost = $value->quantity * $value->price;
            $totalCost += $cost;
        }

        $subStocks = Stock::where('shop_id', auth()->user()->shop_id)
                        ->where('quantity', '>', 0)
                        ->get();


        return view('sales.make_sales', compact('shops', 'stocks', 'orders', 'totalCost', 'subStocks', 'customers'));
    }


    public function ProcessSales(Request $request)
    {
        $stock = Stock::find($request->stock_id);

        $saved = PreSale::create([
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
        PreSale::find($id)->delete();

        return redirect()->back();
    }


    public function SalesPriceUpdate(Request $request, $id)
    {
        $salesOrder = PreSale::find($id);

        $salesOrder->update(['price' => $request->newPrice]);

        return redirect()->back();
    }


    /**
     * Purchase details.
     *
     * @return \Illuminate\Http\Response
     */
    public function SalesDetail($reference)
    {
        $sales = Sale::where('reference_no', $reference)->get();
        $saleBatch = SaleBatch::where('reference_no', $reference)->first();

        return view('sales.sales_detail', compact('sales', 'saleBatch'));
    }

    /**
     * Invoice
     */
    public function invoie($reference)
    {
        $sales = Sale::where('reference_no', $reference)->get();
        $saleBatch = SaleBatch::where('reference_no', $reference)->first();

        return view('sales.invoice', compact('sales', 'saleBatch'));
    }



    public function resetSales()
    {
        $order = PreSale::where('user_id', auth()->user()->id)->delete();

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
        $sale = PreSale::where('user_id', auth()->user()->id)->get();

        // REFERENCE NO
        $reference = str_random(15);

        foreach ($sale as $value) {
            $stock = Stock::where('id', $value->stock_id)
                            // ->where('shop_id', $value->shop_id)
                            ->first();              
            $totalQnty = $stock->quantity - $value->quantity;
            // Update quantity
            $stock->update(['quantity' => $totalQnty]);

            // Save Purchase
            Sale::create([
                'shop_id' => $request->shop_id,
                'quantity' => $value->quantity,
                'price' => $value->price,
                'stock_id' => $value->stock_id,
                'payment_method' => $request->paymentMethod,
                'reference_no' => $reference
            ]);
        }

        $allQnty = $sale->sum('quantity');
        $allprice = $sale->sum('price');
        $allcount = $sale->count();

        SaleBatch::create([
            'user_id' => auth()->user()->id,
            'shop_id' => $request->shop_id,
            'total_cost' => $request->total_cost,
            'reference_no' => $reference,
            'payment_method' => $request->paymentMethod,
            'amount_paid' => $request->amount_paid,
            'customer_id' => $request->customer_id,
            'invoice_no' => mt_rand(100000, 99999999),
        ]);

        if ($request->total_cost < $request->amount_paid) {
            
        } else {

        }

        // Clear tempOrder
        PreSale::where('user_id', auth()->user()->id)->delete();

        return redirect('/sales');
    }



    /**
     * Credit sale
     */
    public function creditSales()
    {
        return $totalCost = SaleBatch::where('amount_paid', '<', 'total_cost')->get();

        $customers = Customer::all();

        // $creditSales = [];
        foreach ($totalCost as $cost) {
            return $cost;
            $creditSales = SaleBatch::where('amount_paid', '<', 290)->get();
            
        }
        return $creditSales;

        return view('sales.credit_sales', compact('creditSales', 'customers'));
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
