<?php
//Một iterable là bất kỳ giá trị nào có thể được lặp lại bằng một foreach()vòng lặp.
function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item;
  }
}

$arr = ["a", "b", "c"];
printIterable($arr);
