<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie as Movies;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $now_showing = Movies::where('trangthai',1)->orderBy('ngaykhoichieu','desc')->get();
        $coming_soon = Movies::where('trangthai',2)->orderBy('ngaykhoichieu','desc')->get();
        return view('home', ['now_showing' => $now_showing, 'coming_soon' => $coming_soon]);
    }
}
