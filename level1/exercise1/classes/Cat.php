<?php
require_once('Animal.php');
require_once('interface/Sound.php');

class Cat extends Animal implements Sound{
    public function makeSound() :void {
        echo $this->name . " says " .$this->sound . PHP_EOL;
    }
}
?>