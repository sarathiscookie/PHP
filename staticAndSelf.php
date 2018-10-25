<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 24/10/18
 * Time: 10:42 PM
 */

class foo
{
    protected static $test = 'Class Foo';

    public function static_test()
    {
        echo static::$test; // Class Doo
        echo self::$test;  // Class Foo
    }
}

class doo extends foo
{
    static protected $test = 'Class Doo';
}

$class = new doo;
$class->static_test();