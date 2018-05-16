<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hangphim extends Model
{
	protected $primaryKey = "mahangphim";
    protected $table = "hangphim";
    public function phim(){
    	return $this-> hasMany('App\Movie', 'mahangphim', 'mahangphim');
    }

}
