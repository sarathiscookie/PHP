<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 09/10/18
 * Time: 9:58 PM
 */

class Person
{
    public $age;
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        if($age < 18) {
            throw new Exception('Min 18 required');
        }

        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age * 365;
    }
}

$user = new Person('Jane Doe');

$user->setAge(30);

var_dump($user->getAge());