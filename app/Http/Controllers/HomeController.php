<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie as Movies;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = null;
        if (Auth::check()){
            $user = Auth::user();
            $request->session()->put('user', $user);
        }
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
