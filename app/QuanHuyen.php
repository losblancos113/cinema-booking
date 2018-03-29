<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Rap as Rap;

class QuanHuyen extends Model
{
    protected $table = "quanhuyen";

    public function cinemas(){
        return Rap::where('maquanhuyen',$this->maquanhuyen)->get();
    }
}
