<?php
require_once('Animal.php');

class Cat extends Animal 
{
    public function makeSound(): void
    {
        echo $this->name . " says Meu!" . PHP_EOL;
    }
}
