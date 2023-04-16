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
function myTest3() {
    static $x = 0;
    echo $x;
    $x++;
}
echo "<br>";
myTest3();
myTest3();
myTest3();
?>

<!--Data type: String,Integer, Float, Boolean, Array, Object, Null, Resource-->
<?php 
$cars = array("Volvo","BMW");
var_dump($cars);
echo "<br>";
//Class
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
          $this->color = $color;
          $this->model = $model;
    }
    public function message(){
        return "My car is a " . $this->color . " " . $this->model;
    }
}
$myCar = new Car("black", "volvo");
echo $myCar->message() ;
//PHP Strings
echo "<br>";
$name = "tran nghia";
echo strlen($name);
echo str_word_count($name);
echo strrev($name);
echo strpos($name, "nghia") ;
?>
<!--is_int(), is_float(), is_infinite(), is_NaN(), is_numberic(): kiem tra kieu cua mot bien
Truyen chuoi va so float sang int:  int_cast() = (int)$x-->

<!--Hang so: constant: la mot dinh danh cho mot gia tri don gian, khong thay doi dc, toan bo tap lenh-->
<?php 
define("GREETING", "Welcome to W3schools.com!");
echo GREETING;
function myTest5() {
    echo GREETING;
}

//String operations, conditional assignment operations
$txt1 = "hello";
$txt2 = "world";
echo $txt1 . " " . $txt2;
//if status = false thi tra ve logged in 
$user = "nghia";
echo $status = (empty($user)) ? "anomyouse" : "logged in";
//if color khong ton tai thi tra ve red ma ton tai thi color = color
echo $color = $color ?? "red";
?>