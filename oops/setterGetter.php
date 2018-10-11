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

//$user->age = 8; // Here user can easily overwrite age. To avoid this we need to use encapsulation

var_dump($user->getAge());