<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie as Movies;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
   
  

  
    public function index()
    {

        $now_showing = Movies::where('trangthai',1)->orderBy('ngaykhoichieu','desc')->get();
        $coming_soon = Movies::where('trangthai',2)->orderBy('ngaykhoichieu','desc')->get();
        return view('home', ['now_showing' => $now_showing, 'coming_soon' => $coming_soon]);
    }
public function searchmovie(Request $request){
      $key = $request ->key;
    $movies= Movies::where('tenphim','like',"%$key%") ->get();
      

      return view('searchmovie',['movies'=>$movies,'key'=>$key]);
      

    }
    public function doLogout(Request $request){
        Auth::logout();
        $request->session()->flush();
        return Redirect::to('home');
    }
}
