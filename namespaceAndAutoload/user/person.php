<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 18/10/18
 * Time: 7:28 PM
 */

namespace App\user;

class Person {

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}