<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 01/11/18
 * Time: 10:20 PM
 */

interface interfaceMultiInheritOne
{
    public function multiFuncOne();
}

interface interfaceMultiInheritTwo
{
    public function multiFuncTwo();
}

interface interfaceMultiInheritThree extends interfaceMultiInheritOne, interfaceMultiInheritTwo
{
    public function multiFuncThree();
}

class classMultiInherit implements interfaceMultiInheritThree
{
    public function multiFuncOne()
    {
        return 'I am multiple inheritance one';
    }

    public function multiFuncTwo()
    {
        return 'I am multiple inheritance two';
    }

    public function multiFuncThree()
    {
        return 'I am multiple inheritance three';
    }
}

$multiInheritObj = new classMultiInherit;

var_dump($multiInheritObj->multiFuncOne());

var_dump($multiInheritObj->multiFuncTwo());

var_dump($multiInheritObj->multiFuncThree());