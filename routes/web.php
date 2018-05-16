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
Route::get('/cine', [
    'as' => 'cinema.select',
    'uses' => 'CineController@cineSelect'
]);
Route::get('/cine/{idMovie}', [
    'as' => 'cinema.movie.select',
    'uses' => 'CineController@cineSelectByMovie'
]);
Route::get('/cine/seat/{makehoach}', [
    'as' => 'seat.select',
    'uses' => 'CineController@seatSelect'
]);
Route::post('/payment/checkout', [
    'as' => 'payment.checkout',
    'uses' => 'PaymentController@selectPaymentMethod'
]);

Route::post('/payment/processCheckout', [
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
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'check-permission:superadmin|admin']], function () {
    Route::get('login', 'PageAdminController@login');
    Route::get('/', 'PageAdminController@dashboard');
    Route::get('logout', 'PageAdminController@logout');

    Route::group(['prefix' => 'cine'], function () {
        Route::get('listcine', 'PageAdminController@getlistcine');//view phai di cung voi controller nhu nay nay
        Route::get('fixcine/{id}', 'PageAdminController@getfixcine');
        Route::post('fixcine/{id}', 'PageAdminController@postfixcine');
        Route::get('addcine', 'PageAdminController@getaddcine');
        Route::post('addcine', 'PageAdminController@postaddcine');
        Route::get('deletecine/{id}', 'PageAdminController@getdeletecine');
        Route::post('searchcine', 'PageAdminController@searchcine');


    });
    Route::group(['prefix' => 'room', 'middleware' => 'check-permission:superadmin'], function () {
        Route::get('listroom/{id}', 'PageAdminController@getlistroom')->name('listroom');
        Route::get('addroom/{id}', 'PageAdminController@getaddroom');
        Route::post('addroom', 'PageAdminController@postaddroom');
        Route::get('fixroom/{id}', 'PageAdminController@getfixroom');
        Route::post('fixroom/{id}', 'PageAdminController@postfixroom');
        Route::get('deleteroom/{id}', 'PageAdminController@getdeleteroom');
        Route::post('timkiemphong', 'PageAdminController@timkiemphong');


    });
    Route::group(['prefix' => 'seat'], function () {
        Route::get('listseat/{id}', 'PageAdminController@getlistseat');
        Route::get('resetseat/{id}', function ($id) {

            DB::table('ghe')->where('maphong', $id)->where('maghe', '>', 0)->update(['trangthai' => '0']);
            return "reset ghế thành công";
        });
    });
    Route::group(['prefix' => 'ajax'], function () {
        Route::get('district/{idcity}', 'AjaxController@getdistrict');//view phai di cung voi controller nhu nay nay
        Route::get('cine/{iddistrict}', 'AjaxController@getcine');
        Route::get('phong/{marap}', 'AjaxController@getphong');
        Route::get('ghe/{maphong}', 'AjaxController@getghe');
    });
    Route::group(['prefix' => 'user'], function () {
        Route::get('listuser', 'PageAdminController@getlistuser');
        Route::post('searchuser', 'PageAdminController@searchuser');
        Route::get('deleteuser/{id}', 'PageAdminController@deleteuser');
        Route::get('fixuser/{id}', 'PageAdminController@getfixuser');
        Route::post('fixuser/{id}', 'PageAdminController@postfixuser');
    });
    Route::group(['prefix' => 'movie'], function () {
        Route::get('listmovie', 'PageAdminController@getlistmovie');
        Route::get('addmovie', 'PageAdminController@getaddmovie');
        Route::post('addmovie', 'PageAdminController@postaddmovie');
        Route::post('searchuser', 'PageAdminController@searchuser');
        Route::get('deletemovie/{id}', 'PageAdminController@deletemovie');
        Route::get('fixmovie/{id}', 'PageAdminController@getfixmovie');
        Route::post('fixmovie/{id}', 'PageAdminController@postfixmovie');
    });
    Route::group(['prefix' => 'typemovie'], function () {
        Route::get('listtypemovie', 'PageAdminController@getlisttypemovie');
        Route::get('addtypemovie', 'PageAdminController@getaddtypemovie');
        Route::post('addtypemovie', 'PageAdminController@postaddtypemovie');
        Route::get('deletetypemovie/{id}', 'PageAdminController@deletetypemovie');
        Route::get('fixtypemovie/{id}', 'PageAdminController@getfixtypemovie');
        Route::post('fixtypemovie/{id}', 'PageAdminController@postfixtypemovie');

    });
    Route::group(['prefix' => 'studio'], function () {
        Route::get('liststudio', 'PageAdminController@getliststudio');
        Route::get('addstudio', 'PageAdminController@getaddstudio');
        Route::post('addstudio', 'PageAdminController@postaddstudio');
        Route::get('deletestudio/{id}', 'PageAdminController@deletestudio');
        Route::get('fixstudio/{id}', 'PageAdminController@getfixstudio');
        Route::post('fixstudio/{id}', 'PageAdminController@postfixstudio');

    });
    Route::group(['prefix' => 'show'], function () {
        Route::get('listshow', 'PageAdminController@getlistshow');
        Route::get('addshow', 'PageAdminController@getaddshow');
        Route::post('addshow', 'PageAdminController@postaddshow');
        Route::get('deleteshow/{id}', 'PageAdminController@deleteshow');
        Route::get('fixshow/{id}', 'PageAdminController@getfixshow');
        Route::post('fixshow/{id}', 'PageAdminController@postfixshow');

    });
    Route::group(['prefix' => 'deal'], function () {
        Route::get('listdeal', 'PageAdminController@getlistdeal');
        Route::get('detaildeal/{id}', 'PageAdminController@getdetaildeal');


    });
    Route::group(['prefix' => 'bookticket'], function () {
        Route::get('cine', 'PageAdminController@cineSelect');
        Route::get('cine/seat/{makehoach}', 'PageAdminController@seatSelect');


    });


});