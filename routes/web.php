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

Route::get('/', [
    'as' => 'home.index',
   'uses' => 'HomeController@index'
]);
//Route::get('/', function (){
//    return File::get(public_path().'/nganluong_3f02c0f1369c9647fb1d09209ed4bf98.html');
//});
Route::get('/movie/{id}', [
    'as' => 'movie.detail',
   'uses' => 'MovieController@detail'
]);
Route::get('/cine',[
    'as' => 'cinema.select',
    'uses' => 'CineController@cineSelect'
]);
Route::get('/cine/{idMovie}',[
    'as' => 'cinema.movie.select',
    'uses' => 'CineController@cineSelectByMovie'
]);
Route::get('/cine/seat/{makehoach}',[
    'as' => 'seat.select',
    'uses' => 'CineController@seatSelect'
]);
Route::post('/payment/checkout',[
   'as' => 'payment.checkout',
   'uses' => 'PaymentController@selectPaymentMethod'
]);

Route::post('/payment/processCheckout',[
    'as' => 'payment.processcheckout',
    'uses' => 'PaymentController@processCheckout'
]);

Route::get('/payment/info/{codegiaodich}', [
    'as' => 'payment.info',
    'uses' => 'PaymentController@info'
]);

Route::get('/payment/error/{codegiaodich}', [
    'as' => 'payment.error',
    'uses' => 'PaymentController@error'
]);

Route::get('/user/{id}/transaction_history', [
    'as' => 'user.transaction_history',
    'uses' => 'UserController@transaction_history'
]);

Route::get('/user/info', [
    'as' => 'user.info',
    'uses' => 'UserController@user_info'
]);

Route::put('/user/update', [
    'as' => 'user.update',
    'uses' => 'UserController@update'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@doLogout')->name('logout');