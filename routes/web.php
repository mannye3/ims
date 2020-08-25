<?php

use App\Models\User;
use App\Helpers\Basic;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/sales', function () {
//     return view('sales.sales');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


///////////////////


Route::get('run/basic', function() {
    Basic::createRoles();
    Basic::createSuperUser();
    return "Successful";
});

Auth::routes();
Route::get('/', 'Auth\LoginController@showLoginForm');

Route::get('/home', 'HomeController@index')->name('home');



// Route::get('/home', function () {
//     return view('welcome');
// });

// Route::get('/sales', function () {
//     return view('sales.sales');
// });
Route::get('sales/add', function () {
    return view('sales.add_sales');
});
Route::get('sales/invoice', function () {
    return view('sales.invoice');
});


Route::get('/signup', function () {
    return view('auth.signup');
});

Route::get('/signin', function () {
    return view('auth.signin');
});


    /**** USERS ****/
Route::resource('/users', 'User\UserController');

    /**** SHOP ****/
Route::resource('/shops', 'Shop\ShopController');


    /**** SALES ****/
Route::get('/sales', 'Sales\SaleController@index')->name('sales');
Route::get('/sales/create', 'Sales\SaleController@create');
Route::post('/sales/add', 'Sales\SaleController@store');
Route::post('/process/sales', 'Sales\SaleController@processSales');
Route::get('/sales/details/{reference}', 'Sales\SaleController@SalesDetail');
Route::post('/sales/update/price/{id}', 'Sales\SaleController@SalesPriceUpdate');
Route::post('/sales/reset', 'Sales\SaleController@ResetSales');
Route::delete('/sales/remove/{id}', 'Sales\SaleController@removeProduct');
Route::delete('/sales/reset', 'Sales\SaleController@resetSales')->name('Sales.clear');
Route::delete('/sales/invoice/{reference}', 'Sales\SaleController@invoice')->name('Sales.invoice');

Route::get('/credit/sales', 'Sales\SaleController@creditSales')->name('credit.sales');

    /**** PURCHASE ****/
Route::get('/purchase', 'Purchase\PurchaseController@index')->name('purchase.list');
Route::get('/purchase/details/{reference}', 'Purchase\PurchaseController@purchaseDetails')->name('purchase.details');
Route::get('/purchase/create', 'Purchase\PurchaseController@create')->name('purchase.create');
Route::post('/purchase/add', 'Purchase\PurchaseController@store')->name('purchase.store');
Route::post('/process/purchase', 'Purchase\PurchaseController@processPurchase')->name('purchase.process');
Route::post('/purchase/update/price/{id}', 'Purchase\PurchaseController@PurchasePriceUpdate')->name('purchase.price');
Route::delete('/purchase/remove/{id}', 'Purchase\PurchaseController@removeProduct')->name('remove.product');
Route::delete('/purchase/reset', 'Purchase\PurchaseController@resetPurhase')->name('purchase.clear');


    /**** STOCK ****/
Route::resource('/stocks', 'Stock\StockController');
// Route::get('/stock/create', 'Stock\StockController@create')->name('stock.create');
// Route::get('/stock/add', 'Stock\StockController@store')->name('stock.store');

    /**** BANK ****/
Route::resource('/banks', 'Bank\BankController');

    /*** DEBTORS ****/
Route::resource('/debtors', 'Debtor\DebtorController');


    /*** EXPENSE ****/
Route::resource('/expenses', 'Expense\ExpenseController');


    /*** CUSTOMERS ****/
Route::resource('/customers', 'Customer\CustomerController');


Route::get('/cash/movement', 'CashMovement\CashMovementController@index');
