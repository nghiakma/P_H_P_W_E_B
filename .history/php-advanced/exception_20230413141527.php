<?php
//exception: la mot doi tuong mo ta loi hoac hanh vi khong mong muon
//throw: khi mot ngoai le dc nem ra ma theo sau khong dc thuc hien
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("divisor must be");
    }
    return $dividend / $divisor;
}
//dung try....catch: de bat ngoai le
try {
} catch (Exception $e) {
}
