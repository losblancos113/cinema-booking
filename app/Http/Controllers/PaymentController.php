<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ghe as Ghe;
use App\KeHoachChieu;
use App\Phong;
use App\Utils\BaoKimPayment;
use App\GiaoDich;

class PaymentController extends Controller
{
    public function selectPaymentMethod(Request $request){
        if ($request->isMethod("post")){
            $makehoach = $request->input("makehoach");
            $maKH = $request->input("makhachhang");
            $ghe_da_dat = $request->input("ghedat");
            $seat_book = Ghe::whereIn("maghe",json_decode($ghe_da_dat))->get();
            $show = KeHoachChieu::where("makehoachchieu", $makehoach)->first();
            $room = Phong::where("maphong", $show->maphong)->first();
            //tinh tong tien
            $totalAmount = $show->giave * count($seat_book);
            //tao thong tin giao dich
            $giaodich = new GiaoDich();
            $giaodich->makehoach = $makehoach;
            $giaodich->makhachang = $maKH;
            $giaodich->ghe_da_dat = $seat_book;
            $giaodich->tong_tien = $totalAmount;
            $giaodich->show = $show;
            $giaodich->room = $room;
            //tao giao dich trong db
            $giaodich->save();

            return view("payment", ["giao_dich" => $giaodich]);
        }
    }

    public function processCheckout(Request $request){
        if ($request->isMethod("post")){
            $paymentMethod = $request->input("paymentMethod");
            $maGD = $request->input("maGD");

            $baoKimPaymen = new BaoKimPayment();
            $urlBaoKim = $baoKimPaymen->createRequestUrl(66885521155,70000, "ascbhsc", "http://abcphim.site", "http://abcphim.site/a", "HMT", "acb@123.com", "0969896525", "123 pho hue");
            return redirect($urlBaoKim);
        }
    }
}
