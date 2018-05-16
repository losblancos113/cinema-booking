<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie as Movies;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
   
  

  
    public function index(Request $request)
    {

        $now_showing = Movies::where('trangthai',1)->orderBy('ngaykhoichieu','desc')->get();
        $coming_soon = Movies::where('trangthai',2)->orderBy('ngaykhoichieu','desc')->get();
        return view('home', ['now_showing' => $now_showing, 'coming_soon' => $coming_soon]);
    }

    public function doLogout(Request $request){
        Auth::logout();
        $request->session()->flush();
        return Redirect::to('home');
    }
}
