<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GiaoDich;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function transaction_history($id){
        if (Auth::check()){
            $user = session()->get("user");
            if ($user->id == $id){
                $giaodich_by_user = GiaoDich::where("makhachhang", $id)->orderBy("created_at", "desc")->get();
                return view('transaction_history', ["transactions" => $giaodich_by_user]);
            }else{
                return redirect('/user/'.$user->id.'/transaction_history');
            }
        }else{
            return \redirect()->guest('login');
        }
    }

    public function user_info(){
        if (Auth::check()){
            $user = session()->get("user");
            return view("user_info", ["user" => $user, "update" => -1]);
        }else{
            return \redirect()->guest('login');
        }
    }

    public function update(Request $request){
        if (Auth::check()){
            if ($request->isMethod("put")){
                $user = session()->get("user");
                $name = $request->input("name");
                $password = $request->input("password");
                $diachi = $request->input("diachi");
                $sodienthoai = $request->input("sodienthoai");
                $cmnd = $request->input("socmnd");

                //check password is change
                if ($password != "0000000000" && $password != $user->password){
                    $user->password = $password;
                }
                $user->name = $name;
                $user->diachi = $diachi;
                $user->sodienthoai = $sodienthoai;
                $user->socmnd = $cmnd;
                $user->save();
                return redirect()->route("user.info",["user" => $user, "update" => 1]);
            }
        }else{
            return \redirect()->guest('login');
        }
    }

}
