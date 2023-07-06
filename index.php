<?php

//Detect devices
$iPod = stripos($_SERVER['HTTP_USER_AGENT'], "iPod");
$iPhone = stripos($_SERVER['HTTP_USER_AGENT'], "iPhone");
$iPad = stripos($_SERVER['HTTP_USER_AGENT'], "iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'], "Android");

if ($Android) {
    echo "<script>alert('Android');</script>";
    header('Location: https://play.google.com/store/search?q=%E0%B8%AA%E0%B8%87%E0%B8%A7%E0%B8%99%E0%B8%AD%E0%B8%AD%E0%B9%82%E0%B8%95%E0%B9%89%E0%B8%84%E0%B8%B2%E0%B8%A3%E0%B9%8C&c=apps');
} else if ($iPod || $iPhone || $iPad) {
    echo "<script>alert('IOS');</script>";
    header('Location: https://apps.apple.com/th/app/%E0%B8%AA%E0%B8%87%E0%B8%A7%E0%B8%99%E0%B8%AD%E0%B8%AD%E0%B9%82%E0%B8%95-%E0%B8%84%E0%B8%B2%E0%B8%A3/id1455947655?l=th');
} else {
    echo "<script>alert('Other');</script>";
    header('Location: http://www.google.com');
}