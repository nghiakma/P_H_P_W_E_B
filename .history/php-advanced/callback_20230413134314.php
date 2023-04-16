<?php
//callback function: mot ham duoc truyen duoi dang la doi so cua mot ham khac 

function my_callbacks($item)
{
    return strlen($item);
}

$strings = ["apples", "cheese", "banana"];
$lengths = array_map("my_callbacks", $strings);
