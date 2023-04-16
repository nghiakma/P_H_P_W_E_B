<?php
//Interface chi dinh nhung phuong thuc ma mot lop nen thuc hien
//khi mot lop hoac nhieu lop cung thuc hien mot interface dc goi la da hinh
//interface khong co thuoc tinh, abtrasct thi co
//tat ca cac phuong thuc phai la public
interface Animal
{
    public function makeSound();
}
class Cat implements Animal
{
    public function makeSound()
    {
        echo " Meow ";
    }
}
