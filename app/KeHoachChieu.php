<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeHoachChieu extends Model
{
    protected $table = "kehoachchieu";
    protected $primaryKey = "makehoachchieu";
            public $timestamps = false;


    public function phims(){
        return Movie::find($this->maphim);
    }
 public function phim(){
    	return $this-> belongsTo('App\movie', 'maphim', 'maphim');
    }
    public function phong(){
    	return $this-> belongsTo('App\phong', 'maphong', 'maphong');
    }
}
