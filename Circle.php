<?php


class Circle
{
    protected $color;
    protected $radius;

    public function __construct($color, $radius)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
    public function calculateArea(){
        return pi() * pow($this->radius,2);
    }
    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }
    public function __toString(){
        return $this->color;
    }
}