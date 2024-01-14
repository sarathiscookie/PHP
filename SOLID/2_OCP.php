<?php
# Open Closed Principle.
# Classes should be open for extension and closed for modification.

// Violation
class AreaCalculator {
    public function calculateArea($shape) {
        if ($shape instanceof Rectangle) {
            return $shape->getWidth() * $shape->getHeight();
        } elseif ($shape instanceof Circle) {
            return pi() * $shape->getRadius() * $shape->getRadius();
        }
        // More shape calculations...
    }
}

// Solution
// Applying the Open/Closed Principle
interface Shape
{
    public function calculateArea();
}

class Circle implements Shape
{
    public function calculateArea()
    {
        return 'Calculated result of circle';
    }
}

class Rectangle implements Shape
{
    public function calculateArea()
    {
        return 'Calculated result of rectangle';
    }
}

class AreaCalculation
{
    public function calculation(Shape $shape)
    {
        return $shape->calculateArea();
    }
}

$rectangle = new Rectangle();
$circle = new Circle();

$areaCalculation = new AreaCalculation();
echo $areaCalculation->calculation($circle);
?>