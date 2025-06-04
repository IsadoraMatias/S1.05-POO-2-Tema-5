<?php
include('interface/Sound.php');
include('classes/Animal.php');
include('classes/Cat.php');
include('classes/Dog.php');

$cat = new Cat("Fernandez", "Meow!");
$cat-> makeSound();

$dog = new Dog("Haru", "Bark,bark!");
$dog -> makeSound();
?>