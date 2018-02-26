<?php

interface ToyShopCar
{
    public function changeColor($color);
    public function changeBox($box);
}

class Car implements ToyShopCar
{
    public $color = 'Black';
    public $box = 'auto';
    public function changeColor($color)
    {
        $this->color->$color;
    }
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

interface ToyShopTV
{
    public function changeType($type);
    public function changeSize($size);
}

class TV implements ToyShopTV
{
    public $type = 'type';
    public $size = 'small';
    public function changeType($type){
        $this->type->$type;
    }
    public function changeSize($size){
        $this->size->$size;
    }
}
$LG = new TV();
$Toshiba = new TV();
$Toshiba->type;
$LG->changeType('black&white');
$LG->size;
$Toshiba->changeSize('big');


interface ToyShopPen
{
    public function changeType($type);
    public function changeColor($colorpen);
}
class Pen implements ToyShopPen
{
    public $colorpen = 'blue';
    public $type = 'expensive';
    public function changeType($type)
    {
        $this->type->$type;
    }
    public function changeColor($colorpen)
    {
        $this->type->$colorpen;
    }
}
$Parker = new Pen();
$Pilot = new Pen();
$Parker->type;
$Pilot->changeType('cheap');
$Parker->colorpen;
$Pilot->changeColor('Black');

interface ToyShopDuck
{
    public function changeSize($size);
    public function changeGend($gend);
}

class Duck implements ToyShopDuck
{
    public $size = 'big';
    public $gend = 'drake';
    public function changeSize($size)
    {
        $this->size->$size;
    }
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


interface ToyShopTVs
{
    public function changePrice($price);
    public function changeDiskont($discont);
    public function changePop($pop);
    public function changeTv($tv);
}

class TVs implements ToyShopTVs
{
    public $price = '1000';
    public $discont = '10';
    public $pop = 'popular';
    public $tv = 'Toshiba';
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
