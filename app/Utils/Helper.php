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