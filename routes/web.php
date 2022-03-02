<?php

use Illuminate\Support\Facades\Route;

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
//Header Routing URL
Route::get('/', function () {
    return view('home');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/signin', function () {
    return view('signin');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/allproducts',function(){
    return view('allproducts');
});
Route::get('/productdetails/{id}',function(){
    return view('productdetails');
});
Route::get('/aboutus', function () {
    return view('aboutus');
})->middleware('LoginCheck');
//User Routing
Route::post('/customer/signup','CustomerController@register');
Route::post('/customer/signin','CustomerController@login');
Route::get('/customer/signout','CustomerController@logout');
Route::get('/allproducts','ProductController@List');
Route::get('/productdetails/{id}','ProductController@Details');
Route::post('/customer/addtocart','CustomerController@addtocart');
Route::get('/allcart','CustomerController@allcartitems');
Route::get('/cartitem/delete/{product_id}','CustomerController@deletecartitem');
Route::get('/checkout','CustomerController@checkout');
Route::post('/checkout','RazorpayController@store')->name('razorpay.payment.store');