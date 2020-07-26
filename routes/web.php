<?php

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
Route::get('/users', 'User\UserController@index')->name('users');

    /**** SHOP ****/
Route::resource('/shops', 'Shop\ShopController');


    /**** SALES ****/
Route::get('/sales', 'Sales\SaleController@index');
Route::get('/sales/add', 'Sales\SaleController@create');
Route::post('/sales/add', 'Sales\SaleController@store');

    /**** PURCHASE ****/
Route::get('/purchase', 'Purchase\PurchaseController@index')->name('purchase.list');
Route::get('/purchase/details', 'Purchase\PurchaseController@purchaseDetails')->name('purchase.details');
Route::get('/purchase/create', 'Purchase\PurchaseController@create')->name('purchase.create');
Route::post('/purchase/add', 'Purchase\PurchaseController@store')->name('purchase.store');

    /**** STOCK ****/
Route::resource('/stocks', 'Stock\StockController');
// Route::get('/stock/create', 'Stock\StockController@create')->name('stock.create');
// Route::get('/stock/add', 'Stock\StockController@store')->name('stock.store');

    /**** BANK ****/
Route::resource('/banks', 'Bank\BankController');

    /*** DEBTORS ****/
Route::resource('/debtors', 'Debtor\DebtorController');
