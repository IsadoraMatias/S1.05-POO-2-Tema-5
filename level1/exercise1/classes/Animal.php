<?php
require_once('interface/Sound.php');

abstract class Animal implements Sound
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function makeSound();
}
