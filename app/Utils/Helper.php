<?php

function getYoutubeId($url)
{
    if ($url != null) {
        preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $url, $matches);
        if (count($matches) > 0){
            return $matches[0];
        }else {
            return 'notfound';
        }
    } else {
        return 'notfound';
    }
}

function composeDataForViewByCine($rawdata){
    if ($rawdata != null && count($rawdata) > 0){
        $grouped = array_group_by($rawdata, 'ngaychieu', 'maphim');
        foreach ($grouped as $date => $valueDate){
            foreach ($valueDate as $maphim => $shows){
                $phim = $shows[0]->phim;
                $maphimnew = new stdClass();
                $maphimnew->phim = $phim;
                $maphimnew->shows = $shows;
                $grouped[$date][$maphim] = $maphimnew;
            }
        }
        return $grouped;
    }else {
        return $rawdata;
    }
}
function checkPermission($permissions){
    $userAccess = getMyPermission(auth()->user()->quyen);
    foreach ($permissions as $key => $value) {
        if($value == $userAccess){
            return true;
        }
    }
    return false;
}


function getMyPermission($id)
{
    switch ($id) {
        case 1:
            return 'admin';
            break;
        case 2:
            return 'superadmin';
            break;
        default:
            return 'user';
            break;
    }
}

function generateSeatChart($seats){
    $map = [];
    if ($seats != null && count($seats) > 0){
        $tmpHang = "";
        $tmpSoGhe = "";
        for ($i = 0; $i < count($seats); $i++){
            $seat = $seats[$i];
            if ($tmpHang != $seat->hang){
                $tmpHang = $seat->hang;
                if ($i != 0){
                    array_push($map, $tmpSoGhe);
                    $tmpSoGhe = "";
                }
                if ($seat->trangthai == 0){
                    $tmpSoGhe .= "a";
                }else{
                    $tmpSoGhe .= "D";
                }
            }else{
                if ($seat->trangthai == 0){
                    $tmpSoGhe .= "a";
                }else{
                    $tmpSoGhe .= "D";
                }
            }
        }
        return $map;
    }else{
        return null;
    }
}