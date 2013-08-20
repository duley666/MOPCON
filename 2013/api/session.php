<?php

define('LAST_UPDATE', '2013-08-19');


/////////////////////////////////////
header("Content-type: application/json");
date_default_timezone_set("Asia/Taipei");

$data['last_update'] = strtotime(LAST_UPDATE);


$data['sessions'][] = array(
        "id"          => 100,
        "name"        => "小貓咪飼養介紹",
        "speaker"     => "愛貓人士",
        "speaker_bio" => "天真可愛的愛貓人士",
        "keyword"     => "cat",
        "loc"         => "403 會議室",
        "start_time"  => strtotime("2013-10-26 09:00:00"),
        "end_time"    => strtotime("2013-10-26 09:40:00")
        );


$data['sessions'][] = array(
        "id"          => 101,
        "name"        => "小狗狗飼養介紹",
        "speaker"     => "愛狗人士",
        "speaker_bio" => "天真可愛的愛狗人士",
        "keyword"     => "dog",
        "loc"         => "404 會議室",
        "start_time"  => strtotime("2013-10-26 09:50:00"),
        "end_time"    => strtotime("2013-10-26 10:30:00")
        );


echo json_encode($data);
