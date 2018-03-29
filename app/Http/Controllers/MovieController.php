<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Now showing movies
     *
     * @return \Illuminate\Http\Response
     */
    public function nowShowing()
    {
        $now_showing = Movies::where('trangthai',1)->orderBy('ngaykhoichieu','desc')->get();
        return view('now-showing', ['now_showing' => $now_showing]);
    }

    /**
     * coming soon movies
     *
     * @return \Illuminate\Http\Response
     */
    public function comingSoon()
    {
        $coming_soon = Movies::where('trangthai',2)->orderBy('ngaykhoichieu','desc')->get();
        return view('coming-soon', ['coming_soon' => $coming_soon]);
    }

    public function detail($id){
        $movie = Movie::where('maphim',$id)->first();
        return view('movie', ['movie' => $movie]);
    }
}
