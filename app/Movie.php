<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'phim';
    protected $primaryKey = "maphim";
    public function hangphim(){
    	return $this-> belongsTo('App\hangphim', 'mahangphim', 'mahangphim');
    }
    public function loaiphim(){
    	return $this-> belongsTo('App\loaiphim', 'maloaiphim', 'maloaiphim');
    }
}
