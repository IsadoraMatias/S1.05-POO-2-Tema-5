<?php
require_once('Animal.php');
require_once('interface/Sound.php');

class Dog extends Animal implements Sound{
 public function makeSound(){
    echo $this->name . " says " . $this->sound . PHP_EOL;
 }
}
?>