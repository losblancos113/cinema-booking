<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Rap as Rap;

class QuanHuyen extends Model
{
    protected $table = "quanhuyen";
    protected $primaryKey = 'maquanhuyen';
    public $timestamps = false;

    public function cinemas(){
        return Rap::where('maquanhuyen',$this->maquanhuyen)->get();
    }
    public function thanhpho(){
    	return $this-> belongsTo('App\Thanhpho', 'mathanhpho', 'mathanhpho');
    }
    public function rap(){
    	return $this-> hasMany('App\Rap', 'maquanhuyen', 'maquanhuyen');
    }

}
