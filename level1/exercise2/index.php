<?php

require_once ('./classes/Shape.php');
require_once ('./classes/Triangle.php');

$triangle = new Triangle(4,5);
echo $triangle-> area();

?>