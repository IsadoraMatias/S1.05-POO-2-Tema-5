<?php
require_once('Animal.php');

class Dog extends Animal 
{
   public function makeSound(): void
   {
      echo $this->name . " says Bup, bup!" . PHP_EOL;
   }
}
?>