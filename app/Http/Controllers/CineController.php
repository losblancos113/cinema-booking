<?php

namespace App\Http\Controllers;

use App\KeHoachChieu as KeHoachChieu;
use App\ThanhPho as ThanhPho;
use Illuminate\Support\Facades\Auth;
use App\Ghe as Ghe;

class CineController extends Controller
{
    public function cineSelect(){
        $cities = ThanhPho::all();
        return view('select-cine',[
            'cities' => $cities
        ]);
    }

    public function seatSelect($makehoach){
        if (Auth::check()){
            $show = KeHoachChieu::where('makehoachchieu', $makehoach)->first();
            $seats = Ghe::where('maphong', $show->maphong)->orderBy('hang','asc')->orderBy('tenghe','asc')->get();
            $seat_chart = $this->generateSeatChart($seats);
            return view('seat', ['show' => $show, 'seats' => $seats, 'seat_chart' => $seat_chart]);
        }else {
            return \redirect()->guest('login');
        }
    }

    private function generateSeatChart($seats){
        $map = [];
        if ($seats != null && count($seats) > 0){
            $tmpHang = "";
            $tmpSoGhe = "";
            for ($i = 0; $i < count($seats); $i++){
                $seat = $seats[$i];
                if ($tmpHang != $seat->hang){
                    $tmpHang = $seat->hang;
                    if ($i != 0){
                        array_push($map, $tmpSoGhe);
                        $tmpSoGhe = "";
                    }
                    if ($seat->trangthai == 0){
                        $tmpSoGhe .= "a";
                    }else{
                        $tmpSoGhe .= "D";
                    }
                }else{
                    if ($seat->trangthai == 0){
                        $tmpSoGhe .= "a";
                    }else{
                        $tmpSoGhe .= "D";
                    }
                }
            }
            return $map;
        }else{
            return null;
        }
    }
}
