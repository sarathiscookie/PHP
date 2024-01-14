<?php

// Accessing static properties/methods.
class Car
{
    public static $variable = 'BMW';

    public static function staticFunction()
    {
        return 'BENZ';
    }
}

echo Car::$variable;
echo Car::staticFunction();

// Accessing constants
class PIValue
{
    const PI = 3.14;
}

echo PIValue::PI;

// Inheritance and overriding
class ParentClass
{
    public static function overriddenMethod()
    {
        return "Parent method";
    }
}

class ChildClass extends ParentClass
{
    public static function overriddenMethod()
    {
        return parent::overriddenMethod() . 'overridden by child';
    }
}

echo ChildClass::overriddenMethod();
?>