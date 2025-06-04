<?php

class Animal{
    protected string $name;
    protected string $sound;

    public function __construct( string $name, string $sound)
    {
        $this->name = $name;
        $this->sound = $sound;
    }
}
?>