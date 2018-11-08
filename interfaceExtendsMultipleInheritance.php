<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 01/11/18
 * Time: 11:01 PM
 */

interface canSwim
{
    public function swim();
}

interface canFly
{
    public function fly();
}

class bird
{
    public function info()
    {
        return'I am a '.$this->name;
    }
}

class duck extends bird implements canSwim, canFly
{
    var $name = 'Duck';

    public function swim()
    {
        return 'I can swim';
    }

    public function fly()
    {
        return 'I can fly';
    }
}

$sumObj = new duck;

var_dump($sumObj->swim());

var_dump($sumObj->fly());

var_dump($sumObj->info());