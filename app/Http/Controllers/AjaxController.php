<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Rap;
use App\QuanHuyen;
use App\Thanhpho;
use App\Phong;
use App\Ghe;




class AjaxController extends Controller
{
 	public function getdistrict($idcity)

 	{

	$district = QuanHuyen::where('mathanhpho',$idcity)->get();
	foreach($district as $d)
	{
		echo"<option value='".$d->maquanhuyen."'>".$d->tenquanhuyen."</option>";

	}

 	}
 	public function getcine($iddistrict)

 	{

	$cine = Rap::where('maquanhuyen',$iddistrict)->get();
	foreach($cine as $c)
	{
		echo"<option value='".$c->marap."'>".$c->tenrap."</option>";

	}

 	}
 	public function getphong($marap)

 	{

	$phong = Phong::where('marap',$marap)->get();
	foreach($phong as $p)
	{
		echo"<option value='".$p->maphong."'>".$p->tenphong."</option>";

		     



	}

 	}
 	public function getghe($maphong)

 	{

	$ghe = Ghe::where('maphong',$maphong)->get();
	foreach($ghe as $g)
	{

		echo '<tr class="odd gradeX" align="center">'
                                .'<td>'.$g->maghe.'</td>'
                                .'<td>'.$g->tenghe.'</td>'
                                .'<td>'.$g->maphong.'</td>'
                                .'<td>'.$g->phong->tenphong.'</td>'
                                .'<td>'.$g->trangthai.'</td>'
                                .'<td>'.$g->hang.'</td>'
                                .'<td>'.$g->soghe.'</td>'
                                .'<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/ghe/xoaghe/'.$g->maghe.'"> Xóa</a></td>'
                                .'<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/ghe/suaghe/'.$g->maghe.'">Sửa</a></td></tr>';
	}

 	}


}
?>