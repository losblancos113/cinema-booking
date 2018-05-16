<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function detail($id){
        $movie = Movie::where('maphim',$id)->first();
        return view('movie', ['movie' => $movie]);
    }
}
