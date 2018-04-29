<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeHoachChieu extends Model
{
    protected $table = "kehoachchieu";
    protected $primaryKey = "makehoachchieu";

    public function phims(){
        return Movie::find($this->maphim);
    }

}
