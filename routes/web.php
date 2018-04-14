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
Route::get('/movie/{id}', [
    'as' => 'movie.detail',
   'uses' => 'MovieController@detail'
]);
Route::get('/cine',[
    'as' => 'cinema.select',
    'uses' => 'CineController@cineSelect'
]);
Route::get('/cine/seat/{makehoach}',[
    'as' => 'seat.select',
    'uses' => 'CineController@seatSelect'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@doLogout')->name('logout');