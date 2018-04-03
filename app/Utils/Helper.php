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
        return $grouped;
    }else {
        return $rawdata;
    }
}