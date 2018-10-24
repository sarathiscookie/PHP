<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 24/10/18
 * Time: 7:11 PM
 */
class userDetails
{
    public static $age = 1;

    public function age()
    {
        static::$age += 1;
    }
}

$jane = new userDetails();

$jane->age();


$doe = new userDetails();

$doe->age();

echo userDetails::$age;