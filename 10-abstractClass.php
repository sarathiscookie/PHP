<?php

abstract class User
{
    protected $department;

    public function __construct($department)
    {
        $this->department = $department;
    }

    public function role() {}

    public function getDepartment()
    {
        return $this->department;
    }
}

class Offshore extends User
{
    public function role()
    {
        return 'Consultant';
    }
}

class Onsite extends User
{
    public function role()
    {
        return 'Architect';
    }
}

$user = new User('Software');
echo $user->role(). PHP_EOL;
echo $user->getDepartment() . PHP_EOL;

$user_two = new User('Devops');
echo $user_two->role(). PHP_EOL;
echo $user_two->getDepartment(). PHP_EOL;
?>