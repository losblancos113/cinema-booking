<?php

use Illuminate\Http\Request;
use App\Rap as Rap;
use App\Phong as Phong;
use App\KeHoachChieu as KeHoachChieu;
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

Route::get('/getShowByCine/{idCine}', function ($idCine){
    if ($idCine != null){
        //get cac phong theo ma rap
        $rooms = Phong::where('marap', $idCine)->get();
        $data = [];
        $today = date('Y-m-d');
        $current_time = date('H:i:s');
        if ($rooms != null && count($rooms) > 0){
            for ($i = 0; $i < count($rooms); $i++){
                $room = $rooms[$i];
                $show_available = KeHoachChieu::where('maphong', $room->maphong)
                    ->where('ngaychieu','>=',$today)
                    ->where('giobatdau','>=',$current_time)->get();
                if ($show_available != null && count($show_available) > 0){
                    for ($j = 0; $j < count($show_available); $j++){
                        $show = $show_available[$j];
                        $show->room = $room;
                        $show->phim = $show->phims();
                        array_push($data, $show);
                    }
                }
            }
        }
        return composeDataForViewByCine($data);
    }else{
        return null;
    }
});

Route::get('/getShowByCineAndMovie/{idCine}/{idMovie}', function ($idCine, $idMovie){
    if ($idCine != null){
        //get cac phong theo ma rap
        $rooms = Phong::where('marap', $idCine)->get();
        $data = [];
        $today = date('Y-m-d');
        $current_time = date('H:i:s');
        $current_timestamp = time();
        if ($rooms != null && count($rooms) > 0) {
            for ($i = 0; $i < count($rooms); $i++) {
                $room = $rooms[$i];
                $show_available = KeHoachChieu::where('maphong', $room->maphong)
                    ->where('ngaychieu', '>=', $today)
                    ->where('maphim', $idMovie)
                    ->get();
                if ($show_available != null && count($show_available) > 0) {
                    for ($j = 0; $j < count($show_available); $j++) {
                        $show = $show_available[$j];
                        //kiem tra gio
                        $date_time_str = $show->ngaychieu . ' ' . $show->giobatdau;
                        $date_time = DateTime::createFromFormat('Y-m-d H:i:s', $date_time_str);
                        if ($date_time->getTimestamp() >= $current_timestamp) {
                            $show->room = $room;
                            $show->phim = $show->phims();
                            array_push($data, $show);
                        }
                    }
                }
            }
        }
        return composeDataForViewByCine($data);
    }else{
        return null;
    }
});