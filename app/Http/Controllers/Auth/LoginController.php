<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * @param Request $request
     * @param $user
     * @return \Illuminate\Http\RedirectResponse
     * Ham chay sau khi da check login ok. Lay thong tin user vua dang nhap dua vao session
     */
    protected function authenticated(Request $request, $user)
    {
//        if ( $user->isAdmin() ) {// do your margic here
//            return redirect()->route('dashboard');
//        }
        $request->session()->put('user', $user);
 //       return redirect()->back();
    }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//    protected $redirectTo = '/home';
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->redirectTo = url()->previous();
        $this->middleware('guest')->except('logout');
    }
}
