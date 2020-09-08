<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Shop;
use App\Models\User;
use App\Models\Stock;
use App\Models\Expense;
use App\Models\SaleBatch;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /** For The Supper User **/
        $stockValue = Stock::all()->pluck('cost_price')->sum();
        $stockQuantity = Stock::all()->pluck('quantity')->sum();

        $lowStock = Stock::all();

        // Expenses
        $expToday = Expense::where('created_at', Carbon::today())->pluck('amount');
        $todayExpenses = $expToday->sum();
        
        $expAll = Expense::all()->pluck('amount');
        $allExpenses = $expAll->sum();

        // Revenue
        $revToday = SaleBatch::where('created_at', Carbon::today())->pluck('amount_paid');
        $todayRevenue = $revToday->sum() - $todayExpenses;

        $revAll = SaleBatch::all()->pluck('amount_paid');
        $allRevenue = $revAll->sum() - $allExpenses;

        // Users
        $staffs = User::all()->count();


        /** Shop Users **/
        $userShop = auth()->user()->shop_id;

        $subStockValue = Stock::where('shop_id', $userShop)->pluck('cost_price')->sum();
        $subStockQuantity = Stock::where('shop_id', $userShop)->pluck('quantity')->sum();

        $subLowStock = Stock::where('shop_id', $userShop)->get();

        // Expenses
        $subExpToday = Expense::where('created_at', Carbon::today())->pluck('amount');
        $subTodayExpenses = $expToday->sum();
        
        $subExpAll = Expense::where('shop_id', $userShop)->pluck('amount');
        $subAllExpenses = $expAll->sum();

        // Revenue
        $subRevToday = SaleBatch::where('created_at', Carbon::today())->pluck('amount_paid');
        $subTodayRevenue = $revToday->sum() - $todayExpenses;

        $subRevAll = SaleBatch::all()->pluck('amount_paid');
        $subAllRevenue = $revAll->sum() - $allExpenses;

        // Users
        $staffs = User::all()->count();

        $shops = Shop::all()->count();


        // Cash Payment
        // $cashPayment = SaleBatch::where('')->pluck('amount_paid');
        

        return view('welcome', compact(
            'stockValue', 'stockQuantity', 'staffs', 'lowStock',
            'todayExpenses', 'allExpenses', 'todayRevenue', 'allRevenue', 'shops'
        ));
    }
}
