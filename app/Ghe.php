<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ghe extends Model
{
   
     protected $table = 'ghe';
   protected $primaryKey = 'maghe';
      

    public function phong(){
    	return $this-> belongsTo('App\Phong', 'maphong', 'maphong');
    }
}
