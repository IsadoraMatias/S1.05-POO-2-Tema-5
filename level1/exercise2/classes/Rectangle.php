<?php
require_once('Shape.php');

class Rectangle extends Shape {
    public function area(): float|int{
        return $this->width * $this->height;
    }
}
?>