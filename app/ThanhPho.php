<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\QuanHuyen as QuanHuyen;

class ThanhPho extends Model
{
    protected $table = "thanhpho";

    public function districts(){
        return QuanHuyen::where('mathanhpho', $this->mathanhpho)->get();
    }
}
