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
$c = 6;
<?php
function myTest(){
    echo "Variable x inside function is: ".$c;
}
myTest();
echo "Variable x outside function is: ".$c;
?>