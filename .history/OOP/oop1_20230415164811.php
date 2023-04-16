<?php
//Lop la khuon mau cho tat ca cac doi tuong, mot doi tuong la the hien cua mot lop
class Fruit
{
    private $name;
    private $color;

    function __construct()
    {
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
class Strawberry extends Fruit
{
    public function message()
    {
        echo "Am I a fruit or a berry";
    }
}
$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color("Red");
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
