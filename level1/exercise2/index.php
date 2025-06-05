<?php

require_once ('./classes/Shape.php');
require_once ('./classes/Triangle.php');
require_once ('./classes/Rectangle.php');

$triangle = new Triangle(4,5);
echo $triangle-> area() . PHP_EOL;

$rectangle = new Rectangle(5,5);
echo $rectangle-> area();

?>