<?php

class ToyShop
{
    public $color = 'Black';
    public $size = 'small';
    public $type = 'color';
    public $price = '1000';
    public $discont = '10';
    public $pop = 'popular';
    public function changeColor($color)
    {
        $this->color->$color;
    }
    public function changeType($type){
        $this->type->$type;
    }
    public function changeSize($size){
        $this->size->$size;
    }
    public function changePrice($price)
    {
        $this->price->$price;
    }
    public function changeDiskont($discont)
    {
        $this->discont->$discont;
    }
    public function changePop($pop)
    {
        $this->pop->$pop;
    }
}


class Car extends ToyShop
{
    public $box = 'auto';
    public function changeBox($box){
        $this->box->$box;
    }
}
$mersedes = new Car();
$lada = new Car();
$lada->color;
$lada->changeBox('mehanic');
$mersedes->changeColor('green');
$mersedes->box;

class TV extends ToyShop
{
}
$LG = new TV();
$Toshiba = new TV();
$Toshiba->color;
$LG->changeType('black&white');
$LG->size;
$Toshiba->changeSize('big');

class Pen extends ToyShop
{
}
$Parker = new Pen();
$Pilot = new Pen();
$Parker->type;
$Pilot->changeType('cheap');
$Parker->color;
$Pilot->changeColor('Black');

class Duck extends ToyShop
{
    public $gend = 'drake';
    public function changeGend($gend)
    {
        $this->gend->$gend;
    }
}
$Donald = new Duck();
$Daisy = new Duck();
$Donald->gend;
$Daisy->changeGend('duck');
$Donald->size;
$Daisy->changeSize('small');

class TVs extends ToyShop
{
    public $tv = 'Toshiba';
    public function changeTv($tv)
    {
        $this->tv->$tv;
    }
}
$First = new TVs();
$Second = new TVs();
$Third = new TVs();
$First->price;
$First->changeDiskont('35');
$First->pop;
$First->tv;
$Second->price;
$Second->discont;
$Second->changePop('unpopular');
$Second->changeTv('Tomas');
$Third->changePrice(5000);
$Third->changeDiskont('0');
$Third->pop;
$Third->changeTv('Sony');

?>
