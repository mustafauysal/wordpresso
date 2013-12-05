<?php

// 4sq map gorsel linkleri arasindaki x degerinin oldugu gibi kalmasi icin
// tesekkurler @aligundogdu

add_filter("the_title","mapStringConvert");
function mapStringConvert($url){
    $s = array("&#215;","&#038;","×");
    $d = array("x","&","x");
    return str_replace($s,$d,$url);
}