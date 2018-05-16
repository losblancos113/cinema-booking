<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loaiphim extends Model
{
	protected $primaryKey = "maloaiphim";
     protected $table = "loaiphim";
     public $timestamps = false;

    public function phim(){
    	return $this-> hasMany('App\Movie', 'maloaiphim', 'maloaiphim');
    }
}
