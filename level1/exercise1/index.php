<?php

require_once('classes/Animal.php');
require_once('classes/Cat.php');
require_once('classes/Dog.php');

$cat = new Cat("Fernandez");
$cat->makeSound();

$dog = new Dog("Haru");
$dog->makeSound();
?>