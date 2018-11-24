<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Role;
use App\User;
use Illuminate\Support\Facades\Auth;

//if (Auth::user()) {
//    Route::get('/', function () {
//        return view('home');
//    });
//} else {
//    Route::get('/', function () {
//        return view('auth.login');
//    });
//}

Route::get('/', function () {
    return redirect('/home');
});


Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/users', 'UserController@index');

Route::resource('purchaseorder','PurchaseOrderController');

Route::resource('grn','GRNController');

Route::resource('accounts','GLAccountController');

Route::resource('/accounts','GLAccountController');

Route::resource('vouchers','GLVoucherController');

Route::resource('vouchersType','GLVoucherTypeController');

Route::resource('/installments','InstallmentPlanController');

Route::resource('/products', 'ProductController');

Route::resource('/productdetails','ProductDetailsController');

Route::resource('/grns','GRNController');

Route::resource('/purchaseOrders','PurchaseOrderController');

Route::resource('/productCategories','productCategoriesController');

Route::resource('/productBrands', 'BrandController');

Route::resource('/vendors', 'VendorsController');

Route::resource('/invoices', 'InvoiceController');



