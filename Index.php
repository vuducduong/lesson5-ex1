<?php
include_once "Circle.php";
include_once "Cylinder.php";

$circle = new Circle("red",7);
echo "Diện tích của hình tròn ".$circle ." là : ".$circle->calculateArea()."<br>";
echo "Chu vi của hình tròn ".$circle. " là : ". $circle->calculatePerimeter()."<br>";

$cylinder = new Cylinder("black",8,8);
echo "Diện tích của hình trụ ".$cylinder." là :" .$cylinder->calculateArea()."<br>";
echo "Diện tích của hình trụ ".$cylinder." là :" .$cylinder->calculatePerimeter()."<br>";
echo "Thể tich của hình trụ ".$cylinder. " là :" .$cylinder->calculateVolume()."<br>";