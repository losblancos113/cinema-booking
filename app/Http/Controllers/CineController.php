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

    public function cineSelectByMovie($idMovie){
        $cities = ThanhPho::all();
        return view('select-cine',[
            'cities' => $cities,
            'idMovie' => $idMovie
        ]);
    }

    public function seatSelect($makehoach){
        if (Auth::check()){
            $show = KeHoachChieu::where('makehoachchieu', $makehoach)->first();
            $seats = Ghe::where('maphong', $show->maphong)->orderBy('hang','asc')->orderBy('tenghe','asc')->get();
            $seat_chart = generateSeatChart($seats);
            return view('seat', ['show' => $show, 'seats' => $seats, 'seat_chart' => $seat_chart]);
        }else {
            return \redirect()->guest('login');
        }
    }

}
