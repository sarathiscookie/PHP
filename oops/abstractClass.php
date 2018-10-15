<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 14/10/18
 * Time: 11:02 PM
 */

abstract class car
{
    abstract public function modelType();

    public function wheelCount()
    {
        return 'Four wheels';
    }
}

class bmw extends car
{
    public function modelType()
    {
        return 'BMW 7 Series';
    }
}

class benz extends car
{
    public function modelType()
    {
        return 'S Class';
    }
}

class audi extends car
{
    public function modelType()
    {
        return 'A8 Series';
    }
}

class porche extends car
{
    public function modelType()
    {
        return 'Cayenne';
    }
}

echo (new porche)->modelType();
echo (new porche)->wheelCount();

//Note: If we hide modelType in porche class we will get error. All abstract method in a parent class must be defined in child class.