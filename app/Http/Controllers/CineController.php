<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ThanhPho as ThanhPho;
use App\QuanHuyen as QuanHuyen;

class CineController extends Controller
{
    public function cineSelect(){
        $cities = ThanhPho::all();
        return view('select-cine',[
            'cities' => $cities
        ]);
    }
}
