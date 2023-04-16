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
//finally luon dc thuc hien du cho ngoai len co bi bat hay khong
try {
    echo divide(5, 0);
} catch (Exception $e) {
    echo "Unable to divide.";
} finally {
    echo "Process complete.";
}
