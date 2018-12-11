<?php
include('functions.php');
$link = "http://www.meirwo.com/static/images/banner/948.jpg";//输入下载地址
$BDUSS = "***************************************************************FBQUFBJCQAAAAAAAAAAAEAAABqPHTpTWVheWFpcgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB0MD1wdDA9cbU";//输入BDUSS
echo bdsave($link,$BDUSS);
