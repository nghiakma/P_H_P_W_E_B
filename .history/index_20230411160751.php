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
echo "<br>";
myTest1();
echo $y;
//$GLOBALS[index]
function myTest2() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
myTest2();
echo "<br>";
echo $y;
//static: Muon mot bien cuc bo khi thuc thi xong mot ham ma khong muon xoa bien do
function myTest3(){

}
?>