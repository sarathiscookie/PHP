<?php

interface Shape
{
    public function calculateArea();

    public function calculatePerimeter();
}

class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * $this->radius * $this->radius;
    }

    public function calculatePerimeter()
    {
        return 2 * pi() * $this->radius;
    }
}

class Rectangle implements Shape
{
    private $length;

    private $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea()
    {
        return $this->length * $this->width;
    }

    public function calculatePerimeter()
    {
        return 2 * ($this->length + $this->width);
    }
}

$shape = new Rectangle(2, 5);
echo $shape->calculateArea();
echo $shape->calculatePerimeter();
?>