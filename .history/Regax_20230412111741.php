<?php 
//Bieu thuc chinh quy la mot chuoi cac ky tu tao thanh mau tim kiem
$str = "Vist Microsoft";
$pattern = "/microsoft/i";
echo preg_match($pattern, $str);
?>