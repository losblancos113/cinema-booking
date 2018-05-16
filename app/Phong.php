<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
   protected $table = 'phong';
     protected $primaryKey = 'maphong';
        public $timestamps = false;

    public function ghe(){
    	return $this-> hasMany('App\Ghe', 'maphong', 'maphong');
    }
    public function rap(){
    	return $this-> belongsTo('App\Rap', 'marap', 'marap');
    }
}
