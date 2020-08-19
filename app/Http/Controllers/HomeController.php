<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
        $stockValue = Stock::all()->pluck('price')->sum();
        $stockQuantity = Stock::all()->pluck('quantity')->sum();

        $lowStock = Stock::where('quantity', '<', 2)->get();

        // Expenses
        $expToday = Expense::where('created_at', Carbon::today())->pluck('amount');
        $todayExpenses = $expToday->sum();
        
        $expAll = Expense::all()->pluck('amount');
        $allExpenses = $expAll->sum();

        // Revenue
        $revToday = SaleBatch::where('created_at', Carbon::today())->pluck('amount_paid');
        $todayRevenue = $revToday->sum();

        $revAll = SaleBatch::all()->pluck('amount_paid');
        $allRevenue = $revAll->sum();

        // Users
        $staffs = User::all()->count();

        // Cash Payment
        // $cashPayment = SaleBatch::where('')->pluck('amount_paid');
        

        return view('welcome', compact(
            'stockValue', 'stockQuantity', 'staffs', 'lowStock',
            'todayExpenses', 'allExpenses', 'todayRevenue', 'allRevenue'
        ));
    }
}
