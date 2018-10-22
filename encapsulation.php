<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 10/10/18
 * Time: 8:43 PM
 */

class Gender
{
    private $gender;

    public function setGender($gender)
    {
        if($gender !== 'male' && $gender !== 'female') {
            throw new Exception('Gender is not correct');
        }
        $this->gender = $gender;
    }

    public function getGender()
    {
        if($this->gender == 'male') {
            return 'You are a male';
        }

        if($this->gender == 'female') {
            return 'You are a female';
        }
    }

}

$genderData = new Gender();

$genderData->setGender('female');

//$genderData->gender = 'male'; // User can't overwrite gender. This is encapsulation.

var_dump($genderData->getGender());