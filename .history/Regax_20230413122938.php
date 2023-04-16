<?php 
//Bieu thuc chinh quy la mot chuoi cac ky tu tao thanh mau tim kiem
$str = "Vist Microsoft";
$pattern = "/microsoft/i";
$pattern1 = "/i/i";
$pattern2 = "/Microsoft/i";
echo preg_match($pattern, $str);
echo preg_match_all($pattern1, $str);
echo preg_replace($pattern2,"W3schools" ,$str);

//tim kiem tu banana bang cach tim kiem ba ma sau ba co 2 na
$str1 = "Apples and bananas.";
$pattern3 = "/ba(na){2}/i";
echo preg_match($pattern3, $str1);
