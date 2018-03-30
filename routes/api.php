<?php

use Illuminate\Http\Request;
use App\Rap as Rap;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/getCineByDistrict/{id}', function ($id){
    if($id != null){
        return Rap::where('maquanhuyen', $id)->get();
    }else{
        return null;
    }
});