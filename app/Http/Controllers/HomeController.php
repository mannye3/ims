<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Stock;
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
        // $this->middleware('auth');
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

        // Users
        $staffs = User::all()->count();
        

        return view('welcome', compact('stockValue', 'stockQuantity', 'staffs', 'lowStock'));
    }
}
