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

Route::get('/', function () {
    return view('pages.login');
});
Route::get('welcome', function(){
	return view('welcome');
});

Route::get('facebooklogin', function(){
	return View::make('pages.facebooklogin');
});
Route::get('home/before', 'HomeController@beforepurchase');

Route::get('booking/summary', 'BookingController@summary');
Route::get('booking/payment', 'BookingController@payment');
Route::get('booking/confirm', 'BookingController@confirm');

Route::get('home/after', 'HomeController@afterpurchase');