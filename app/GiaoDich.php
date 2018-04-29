<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiaoDich extends Model
{
    //
    protected $table = "giao_dich";
    protected $primaryKey = "magd";

    public function getMovie(){
        $kehoachchieu = KeHoachChieu::find($this->makehoach);
        return $kehoachchieu->phims();
    }

    public function getOrderDetail(){
        return ChiTietGiaoDich::where("codegiaodich", $this->codegiaodich)->get();
    }

    public function getTotalAmount(){
        $show = KeHoachChieu::find($this->makehoach);
        $seat_book = $this->getOrderDetail();
        $totalAmount = $show->giave * count($seat_book);
        return $totalAmount;
    }
}
