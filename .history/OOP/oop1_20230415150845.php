<?php
//Lop la khuon mau cho tat ca cac doi tuong, mot doi tuong la the hien cua mot lop
class Fruit
{
    public $name;
    public $color;
    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
    function set_color($color)
    {
        $this->color = $color;
    }
    function get_color()
    {
        return $this->color;
    }
}
$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color("Red");
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
