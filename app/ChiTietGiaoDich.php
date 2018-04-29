<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietGiaoDich extends Model
{
    //
    protected $table = "chi_tiet_giao_dich";

    public function getSeat(){
        return Ghe::find($this->maghe);
    }
}
