<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Rap;
use App\QuanHuyen;
use App\Thanhpho;
use App\Phong;
use App\Ghe;
use App\Nhanvien;
use App\User;
use App\Movie;
use App\Hangphim;
use App\Loaiphim;
use App\KeHoachChieu;
use App\Giaodich;

use Illuminate\Support\Facades\DB;
use Session;
use App\ChiTietGiaoDich as OrderDetail;


class PageAdminController extends Controller
{


    public function dashboard()
    {
        $data = session()->get("data");

        return view('admin.chart');


    }

    public function getlistcine()
    {
        $district = QuanHuyen::all();
        $cine = Rap::all();
        return view('admin.cine.listcine', ['cine' => $cine, 'district' => $district]);
    }

    public function getaddcine()
    {
        $district = QuanHuyen::all();
        $city = Thanhpho::all();
        return view('admin.cine.addcine', ['district' => $district, 'city' => $city]);


    }

    public function postaddcine(Request $request)
    {
        $cine = new Rap;
        $cine->tenrap = $request->cinename;
        $cine->maquanhuyen = $request->district;
        $cine->diachirap = $request->address;
        $cine->save();
        return redirect('admin/cine/listcine');

    }

    public function getfixcine($id)
    {
        $district = Quanhuyen::all();
        $city = Thanhpho::all();
        $cine = Rap::find($id);
        return view('admin.cine.fixcine', ['cine' => $cine, 'district' => $district, 'city' => $city]);


    }

    public function postfixcine(Request $request, $id)
    {
        $cine = Rap::find($id);
        $cine->tenrap = $request->cinename;
        $cine->maquanhuyen = $request->district;
        $cine->diachirap = $request->address;
        $cine->save();
        return redirect('admin/cine/listcine');


    }

    public function getdeletecine($id)
    {
        $cine = Rap::find($id);
        $cine->delete();
        return redirect('admin/cine/listcine');


    }

    public function searchcine(Request $request)
    {
        $key = $request->key;
        $cine = Rap::where('tenrap', 'like', "%$key%")->orWhere('marap', 'like', "$key")->get();


        return view('admin.cine.searchcine', ['cine' => $cine, 'key' => $key]);


    }

    public function getlistroom($id)
    {

        $room = Phong::where('marap', $id)->get();
        return view('admin.room.listroom', ['room' => $room, 'id' => $id]);
    }

    public function getaddroom($id)
    {

        $cine = Rap::where('marap', $id)->first();
        return view('admin.room.addroom', ['cine' => $cine]);


    }

    public function postaddroom(Request $request)
    {
        $room = null;
        DB::transaction(function () use ($request, &$room){
            $room = new Phong();
            $room->marap = $request->input('cine');
            $room->tenphong = $request->input('nameroom');
            //lay ra so luong ghe
            $number_row = $request->input('number_row');
            $number_seat_per_row = $request->input('number_seat_per_row');
            $so_luong_ghe = $number_row * $number_seat_per_row;
            $room->soluongghe = $so_luong_ghe;
            $room->save();
            //tao ghe
            for ($i = 1; $i <= $number_row; $i++){
                for ($j = 1; $j <= $number_seat_per_row; $j++){
                    $ghe = new Ghe();
                    $ghe->tenghe = $i.'_'.$j;
                    $ghe->maphong = $room->maphong;
                    $ghe->trangthai = 0;
                    $ghe->hang = $i;
                    $ghe->soghe = $j;
                    $ghe->save();
                }
            }
        });
        return redirect()->route('listroom', [$room->marap]);

    }

    public function getfixroom($id)
    {
        $district = Quanhuyen::all();
        $city = Thanhpho::all();
        $cine = Rap::all();
        $room = Phong::find($id);
        return view('admin.room.fixroom', ['cine' => $cine, 'district' => $district, 'city' => $city, 'room' => $room]);


    }

    public function postfixroom(Request $request, $id)
    {
        $room = Phong::find($id);
        $room->tenphong = $request->nameroom;
        $room->marap = $request->cine;
        $room->soluongghe = $request->numberseat;
        $room->save();
        return redirect()->route('listroom', [$room->marap]);


    }

    public function getdeleteroom($id)
    {
        $room = Phong::find($id);
        $room->delete();
        return redirect()->route('listroom', [$room->marap]);


    }

    public function timkiemphong(Request $request)
    {
        $tukhoa = $request->tukhoa;
        $phong = Phong::where('marap', 'like', "$tukhoa")->orWhere('maphong', 'like', "$tukhoa")->get();


        return view('admin.phong.timkiemphong', ['phong' => $phong, 'tukhoa' => $tukhoa]);


    }

    public function getlistseat($id)
    {

        $seat = Ghe::where('maphong', $id)->get();
        return view('admin.seat.listseat', ['seat' => $seat]);
    }


    public function getlistuser()
    {
        $user = User::all();
        return view('admin.user.listuser', ['user' => $user]);

    }

    public function searchuser(Request $request)
    {
        $key = $request->key;
        $user = User::where('name', 'like', "%$key%")->orWhere('sodienthoai', 'like', "$key")->orWhere('socmnd', 'like', "$key")->orWhere('email', 'like', "$key")->get();


        return view('admin.user.searchuser', ['user' => $user, 'key' => $key]);


    }

    public function deleteuser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/user/listuser');


    }

    public function getfixuser($id)
    {

        $user = User::find($id);
        return view('admin.user.fixuser', ['user' => $user]);


    }

    public function postfixuser(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->quyen = $request->quyen;

        $user->save();
        return redirect('admin/user/listuser');


    }

    public function getlistmovie()
    {
        $movie = Movie::all();
        return view('admin.movie.listmovie', ['movie' => $movie]);

    }


    public function getaddmovie()
    {
        $filmstudio = Hangphim::all();
        $movietype = Loaiphim::all();

        return view('admin.movie.addmovie', ['filmstudio' => $filmstudio, 'movietype' => $movietype]);


    }

    public function postaddmovie(Request $request)
    {
        $movie = new Movie;
        $movie->mahangphim = $request->filmstudio;
        $movie->maloaiphim = $request->movietype;
        $movie->tenphim = $request->moviename;
        $movie->thoiluong = $request->time;

        $movie->motaphim = $request->describe;

        $movie->dandienvien = $request->actor;
        $movie->ngaykhoichieu = $request->datestart;
        $movie->anhphim = $request->moviepic;
        $movie->daodien = $request->director;
        $movie->trailer = $request->trailer;
        $movie->trangthai = $request->status;

        $movie->save();
        return redirect('admin/movie/listmovie');

    }

    public function deletemovie($id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        return redirect('admin/movie/listmovie');


    }

    public function getfixmovie($id)
    {
        $filmstudio = Hangphim::all();
        $movietype = Loaiphim::all();
        $movie = Movie::find($id);
        return view('admin.movie.fixmovie', ['filmstudio' => $filmstudio, 'movietype' => $movietype, 'movie' => $movie]);


    }

    public function postfixmovie(Request $request, $id)
    {
        $movie = Movie::find($id);
        $movie->mahangphim = $request->filmstudio;
        $movie->maloaiphim = $request->movietype;
        $movie->tenphim = $request->moviename;
        $movie->thoiluong = $request->time;

        $movie->motaphim = $request->describe;

        $movie->dandienvien = $request->actor;
        $movie->ngaykhoichieu = $request->datestart;
        $movie->anhphim = $request->moviepic;
        $movie->daodien = $request->director;
        $movie->trailer = $request->trailer;
        $movie->trangthai = $request->status;
        $movie->save();
        return redirect('admin/movie/listmovie');


    }

    public function getlisttypemovie()
    {
        $typemovie = Loaiphim::all();
        return view('admin.typemovie.listtypemovie', ['typemovie' => $typemovie]);

    }

    public function getaddtypemovie()
    {

        return view('admin.typemovie.addtypemovie');


    }

    public function postaddtypemovie(Request $request)
    {
        $typemovie = new Loaiphim;
        $typemovie->tenloaiphim = $request->nametypemovie;
        $typemovie->save();
        return redirect('admin/typemovie/listtypemovie');

    }

    public function deletetypemovie($id)
    {
        $typemovie = Loaiphim::find($id);
        $typemovie->delete();
        return redirect('admin/typemovie/listtypemovie');


    }

    public function getfixtypemovie($id)
    {

        $typemovie = Loaiphim::find($id);
        return view('admin.typemovie.fixtypemovie', ['typemovie' => $typemovie]);


    }

    public function postfixtypemovie(Request $request, $id)
    {
        $typemovie = Loaiphim::find($id);
        $typemovie->tenloaiphim = $request->nametypemovie;


        $typemovie->save();
        return redirect('admin/typemovie/listtypemovie');


    }

    public function getliststudio()
    {
        $studio = Hangphim::all();
        return view('admin.studio.liststudio', ['studio' => $studio]);

    }

    public function getaddstudio()
    {

        return view('admin.studio.addstudio');


    }

    public function postaddstudio(Request $request)
    {
        $studio = new Hangphim;
        $studio->tenhangphim = $request->namestudio;
        $studio->save();
        return redirect('admin/studio/liststudio');

    }

    public function getfixstudio($id)
    {

        $studio = Hangphim::find($id);
        return view('admin.studio.fixstudio', ['studio' => $studio]);


    }

    public function postfixstudio(Request $request, $id)
    {
        $studio = Hangphim::find($id);
        $studio->tenhangphim = $request->namestudio;


        $studio->save();
        return redirect('admin/studio/liststudio');


    }

    public function deletestudio($id)
    {
        $studio = Hangphim::find($id);
        $studio->delete();
        return redirect('admin/studio/liststudio');


    }

    public function getlistshow()
    {
        $show = KeHoachChieu::all();
        return view('admin.show.listshow', ['show' => $show]);

    }

    public function getaddshow()
    {
        $movie = Movie::all();
        $room = Phong::all();
        return view('admin.show.addshow', ['movie' => $movie, 'room' => $room]);


    }

    public function postaddshow(Request $request)
    {
        $show = new KeHoachChieu;
        $show->maphim = $request->movie;
        $show->maphong = $request->room;
        $show->ngaychieu = $request->dateshow;
        $show->giobatdau = $request->timeshow;
        $show->giave = $request->amount;
        $show->save();
        return redirect('admin/show/listshow');

    }

    public function deleteshow($id)
    {

        $show = KeHoachChieu::find($id);
        $show->delete();
        return redirect('admin/show/listshow');


    }

    public function getfixshow($id)
    {
        $movie = Movie::all();
        $room = Phong::all();
        $show = KeHoachChieu::find($id);
        return view('admin.show.fixshow', ['show' => $show, 'movie' => $movie, 'room' => $room]);


    }

    public function postfixshow(Request $request, $id)
    {
        $show = KeHoachChieu::find($id);
        $show->maphim = $request->movie;
        $show->maphong = $request->room;
        $show->ngaychieu = $request->dateshow;
        $show->giobatdau = $request->timeshow;
        $show->giave = $request->amount;
        $show->save();
        return redirect('admin/show/listshow');


    }

    public function getlistdeal()
    {
        $deal = GiaoDich::all();
        return view('admin.deal.listdeal', ['deal' => $deal]);

    }

    public function getdetaildeal($id)
    {

        $detaildeal = ChiTietGiaoDich::where('codegiaodich', $id)->get();
        return view('admin.deal.detaildeal', ['detaildeal' => $detaildeal]);
    }

    public function cineSelect()
    {
        $cities = ThanhPho::all();
        return view('admin.bookticket.select-cine', [
            'cities' => $cities
        ]);
    }

    public function seatSelect($makehoach)
    {
        if (Auth::check()) {
            $show = KeHoachChieu::where('makehoachchieu', $makehoach)->first();
            $seats = Ghe::where('maphong', $show->maphong)->orderBy('hang', 'asc')->orderBy('tenghe', 'asc')->get();
            $seat_chart = $this->generateSeatChart($seats);
            return view('admin.bookticket.seat', ['show' => $show, 'seats' => $seats, 'seat_chart' => $seat_chart]);
        } else {
            return \redirect()->guest('login');
        }
    }

    private function generateSeatChart($seats)
    {
        $map = [];
        if ($seats != null && count($seats) > 0) {
            $tmpHang = "";
            $tmpSoGhe = "";
            for ($i = 0; $i < count($seats); $i++) {
                $seat = $seats[$i];
                if ($tmpHang != $seat->hang) {
                    $tmpHang = $seat->hang;
                    if ($i != 0) {
                        array_push($map, $tmpSoGhe);
                        $tmpSoGhe = "";
                    }
                    if ($seat->trangthai == 0) {
                        $tmpSoGhe .= "a";
                    } else {
                        $tmpSoGhe .= "D";
                    }
                } else {
                    if ($seat->trangthai == 0) {
                        $tmpSoGhe .= "a";
                    } else {
                        $tmpSoGhe .= "D";
                    }
                }
            }
            return $map;
        } else {
            return null;
        }
    }

    public function selectPaymentMethod(Request $request)
    {
        if ($request->isMethod("post")) {
            $makehoach = $request->input("makehoach");
            $maKH = $request->input("makhachhang");
            $ghe_da_dat = $request->input("ghedat");
            $seat_book = Ghe::whereIn("maghe", json_decode($ghe_da_dat))->get();
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
            $giaodichDb->trangthai = 1;
            $giaodichDb->save();
            //tao chi tiet giao dich
            for ($i = 0; $i < count($seat_book); $i++) {
                $chi_tiet_giao_dich = new OrderDetail();
                $chi_tiet_giao_dich->codegiaodich = $giaodichDb->codegiaodich;
                $chi_tiet_giao_dich->maghe = $seat_book[$i]->maghe;
                $chi_tiet_giao_dich->save();
            }


            $giaodich->codegiaodich = $giaodichDb->codegiaodich;

            $ghe_da_dat = OrderDetail::where('codegiaodich', $chi_tiet_giao_dich->codegiaodich)->get();

            //update trang thai ghe da ban
            foreach ($ghe_da_dat as $ghe) {
                Ghe::where('maghe', $ghe->maghe)
                    ->update(['trangthai' => 1]);
            }
            return view("admin.bookticket.payment", ["giao_dich" => $giaodich]);
        }
    }
}