<?php
echo "xxxxxxxxxxxxxxxxxxxxxxx"
?>
<!--aaaaaaa-->
<br>
<?php
$txt = "PHP";
echo "I love " . $txt;
?>
<br>
<?php
$x = 5;
$y = 4;
echo $x + $y;
?>
<!--global and local scopes-->
<br>
<?php
$c = 6;
function myTest(){
    echo "Variable x inside function is: ";
}
myTest();
echo "Variable x outside function is: ".$c;

//global keyword: truy cap 1 bien toan cuc ben trong 1 ham
$x = 5;
$y = 10;
function myTest1() {
  global $x, $y;
  $y = $x + $y;
}
myTest1();
echo $y;
?>