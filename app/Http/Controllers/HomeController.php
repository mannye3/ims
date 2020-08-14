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
        // $todayExpenses = Expense::where('created_at', Carbon::today())->sum('amount');
        // $allExpenses = Expense::all()->sum('amount');

        // Revenue
        // $todayRevenue = SaleBatch::where('created_at', Carbon::today())->sum('amount_paid');
        // $allRevenue = SaleBatch::all()->sum('amount_paid');

        // Users
        $staffs = User::all()->count();
        

        return view('welcome', compact(
            'stockValue', 'stockQuantity', 'staffs', 'lowStock',
        ));
    }
}
