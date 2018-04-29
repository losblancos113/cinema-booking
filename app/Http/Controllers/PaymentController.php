<?php

namespace App\Http\Controllers;

use App\Utils\NLPayment;
use Illuminate\Http\Request;
use App\Ghe as Ghe;
use App\KeHoachChieu;
use App\Phong;
use App\Utils\Payment;
use App\GiaoDich;
use App\ChiTietGiaoDich as OrderDetail;

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
            $giaodich = new \stdClass();
            $giaodich->makehoach = $makehoach;
            $giaodich->makhachhang = $maKH;
            $giaodich->ghe_da_dat = $seat_book;
            $giaodich->tong_tien = $totalAmount;
            $giaodich->show = $show;
            $giaodich->room = $room;
            //tao giao dich trong db
            $giaodichDb = new GiaoDich();
            $giaodichDb->makehoach = $makehoach;
            $giaodichDb->makhachhang = $maKH;
            $giaodichDb->codegiaodich = strtoupper(uniqid());
            $giaodichDb->trangthai = 0;
            $giaodichDb->save();
            //tao chi tiet giao dich
            for ($i = 0; $i < count($seat_book); $i++){
                $chi_tiet_giao_dich = new OrderDetail();
                $chi_tiet_giao_dich->codegiaodich = $giaodichDb->codegiaodich;
                $chi_tiet_giao_dich->maghe = $seat_book[$i]->maghe;
                $chi_tiet_giao_dich->save();
            }


            $giaodich->codegiaodich = $giaodichDb->codegiaodich;
            return view("payment", ["giao_dich" => $giaodich]);
        }
    }

    public function processCheckout(Request $request){
        if ($request->isMethod("post")){
            $paymentMethod = $request->input("paymentMethod");
            $codegiaodich = $request->input("codegiaodich");
            $totalAmount = $request->input("totalAmount");


            $urlRedirect = "/";
            if ("1" == $paymentMethod){
                $payment = new Payment();
                $urlRedirect = $payment->createRequestUrl($codegiaodich, $totalAmount, "ascbhsc", "http://abcphim.site", "http://abcphim.site/a", "HMT", "acb@123.com", "0969896525", "123 pho hue");
            }else if ("2" == $paymentMethod){
                $payment = new NLPayment();
                $urlRedirect = $payment->buildCheckoutUrl(config("app.url")."/payment/info/".$codegiaodich, "hmtmail1@gmail.com", "thanh toan ve xem phim", $codegiaodich, $totalAmount);
            }
            return redirect($urlRedirect);
        }
    }

    public function info(Request $request, $codgiaodich){
        //check url return valid
        $urlReturn = $request->url();
        $isURLVerified = false;
        $paymentMethod = -1;
        if (strpos($urlReturn, "checksum") !== false){
            //baokim
            $paymentMethod = 1;
        } else{
            //ngan luong
            $paymentMethod = 2;
            $payment = new NLPayment();
            $params = $request->input();
            $isURLVerified = $payment->verifyPaymentUrl($params["transaction_info"], $params["order_code"], $params["price"], $params["payment_id"], $params["payment_type"], $params["error_text"], $params["secure_code"]);

        }
//        if ($referer)
        if ($isURLVerified) {
            //check trang thai thanh toán
            $paymentSuccess = false;
            if ($paymentMethod == 1){
                //baokim
            }else if ($paymentMethod == 2){
                //ngan luong
                if ($params["error_text"] == ""){
                    $paymentSuccess = true;
                }
            }

            if ($paymentSuccess){
                //update trang thai giao dich
                $giaodich = GiaoDich::where('codegiaodich', $codgiaodich)->first();
                $giaodich->trangthai = 1;
                $giaodich->save();

                $ghe_da_dat = OrderDetail::where('codegiaodich', $codgiaodich)->get();

                //update trang thai ghe da ban
                foreach ($ghe_da_dat as $ghe) {
                    Ghe::where('maghe', $ghe->maghe)
                        ->update(['trangthai' => 1]);
                }
            }
            $user = session()->get("user");
            return redirect('/user/'.$user->id.'/transaction_history');
        }else{
            return redirect("/payment/error/".$codgiaodich);
        }
    }

    public function error(Request $request, $codgiaodich){
        $giaodich = GiaoDich::where('codegiaodich', $codgiaodich)->first();
        $giaodich->trangthai = 2;
        $giaodich->save();
        return view('payment_error');
    }
}
