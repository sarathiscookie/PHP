<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 18/10/18
 * Time: 7:28 PM
 */

namespace App;

use App\user\Person;

class Business {

    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        $this->staff->add($person);
    }
}