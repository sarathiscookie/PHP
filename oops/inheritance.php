<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 11/10/18
 * Time: 7:45 PM
 */

class fruit
{

    protected $price;


    public function price($price)
    {
        return $this->price = $price * 1.25;
    }
}

class apple extends fruit
{
    public function color()
    {
        return 'red';
    }

    public function taste()
    {
        return 'Apple Tate';
    }
}

class orange extends fruit
{
    public function color()
    {
        return 'orange';
    }

    public function taste()
    {
        return 'Orange Tate';
    }
}

echo (new orange)->price(5);