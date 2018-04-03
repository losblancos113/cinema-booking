<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeHoachChieu extends Model
{
    protected $table = "kehoachchieu";

    public function phims(){
        return Movie::where('maphim', $this->maphim)->first();
    }

}
