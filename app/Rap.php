<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rap extends Model
{
    protected $table = "rap";
   
  protected $primaryKey = 'marap';
  public $timestamps = false;

    public function quanhuyen(){
    	return $this-> belongsTo('App\Quanhuyen', 'maquanhuyen', 'maquanhuyen');
    }
    public function phong(){
    	return $this-> hasMany('App\Phong', 'maphong', 'marap');
    }
}
