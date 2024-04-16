<?php

class car
{
    public $name;
    public $color;

    public function __construct($name,$color)
    {
        $this->name = $name;
        $this->color = $color;
    }
}

$cars = new car('toyota','red');
echo $cars->name;
echo $cars->color;