<?php
//cac lop va phuong thuc truu tuong la khi lop cha co mot phuong thuc dat ten, nhung can cac lop con thuc hien cac tac vu
//mot phuon thuc truu tuong la mot phuong thuc dc khai bao nhung khong dc dat ten
abstract class Car
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function intro(): string;
}
class Volvo extends Car
{
    public function intro(): string
    {
        return "Proud to be Swedish! I'm a $this->name!";
    }
}
$volvo = new Volvo("volvo");
echo $volvo->intro();
abstract class ParentClass
{
    // Abstract method with an argument
    abstract protected function prefixName($name);
}
class ChildClass extends ParentClass
{
    public function prefixName($name)
    {
        if ($name == "John Doe") {
            $prefix = "Mr.";
        } elseif ($name == "Jane Doe") {
            $prefix = "Mrs.";
        } else {
            $prefix = "";
        }
        return "{$prefix} {$name} ";
    }
}
$class = new ChildClass();
echo $class->prefixName("John Doe");
