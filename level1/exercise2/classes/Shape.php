<?php
require_once('interface/Area.php');

abstract class Shape implements Area {
    protected float|int $height;
    protected float|int $width;

    public function __construct(float|int $height, float|int $width){
        $this->height = $height;
        $this->width = $width;
    }

    abstract public function area(): float|int;
}

?>