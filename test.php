<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 10/11/18
 * Time: 4:12 PM
 */

class TestVisibility {

    public $public          = 'public';
    protected $protected    = 'protected';
    private $private        = 'private';

    public function publicMethod()
    {
        var_dump($this->public);
    }

    private function privateMethod()
    {
        var_dump($this->private);
    }

    protected function protectedMethod()
    {
        var_dump($this->protected);
    }
}

class test extends TestVisibility {

    public $protected = 'protected extended';

    public function protectedMethod()
    {
        var_dump($this->protected);
    }
}


$obj = new TestVisibility;

$objExtend = new test;
//$obj->privateMethod();

//$obj->protectedMethod();

$objExtend->protectedMethod();



