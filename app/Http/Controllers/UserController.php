<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function transaction_history($id){
        return view('transaction_history');
    }
}
