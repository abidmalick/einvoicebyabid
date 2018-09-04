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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/create', function () {
    // return view('createuser');
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('user', 'userController');
Route::resource('contact', 'contactController');
Route::resource('invoice', 'invoiceController');
Route::resource('payments', 'paymentController');
Route::resource('labels', 'labelController');

