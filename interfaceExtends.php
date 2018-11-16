<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 01/11/18
 * Time: 9:19 PM
 */

interface interfaceOne
{
    public function foo();
}

interface interfaceTwo
{
    public function joo();
}

class classOne implements interfaceTwo
{
    public function foo()
    {
        return 'I am a class one foo';
    }

    public function joo()
    {
        return 'I am a class one joo';
    }
}

class classTwo implements interfaceOne
{
    public function foo()
    {
        return 'I am a class two foo';
    }
}


$objOne = new classOne;

$objTwo = new classTwo;

var_dump($objOne->joo()); // I am a class one joo

var_dump($objTwo->foo()); // I am class two foo
