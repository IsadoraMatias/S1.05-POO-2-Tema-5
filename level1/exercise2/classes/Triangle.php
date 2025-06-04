<?php
require_once('Shape.php');

class Triangle extends Shape{
    public function area(): float|int {
        return($this-> width * $this-> height)/2;
    }
}

?>