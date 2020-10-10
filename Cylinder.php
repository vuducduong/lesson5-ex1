<?php

include_once "Circle.php";
class Cylinder extends Circle
{
    private $height;

    public function __construct($color,$radius,$height)
    {
        parent::__construct($color,$radius);
        $this->height=$height;

    }
    public function calculateVolume(){
       return parent::calculateArea() * $this->height;
    }

}