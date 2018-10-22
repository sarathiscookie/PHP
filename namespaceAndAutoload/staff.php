<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 18/10/18
 * Time: 7:28 PM
 */

namespace App;

use App\user\Person;

class Staff {

    protected $members = [];

    public function add(Person $person)
    {
        $this->members = $person;
    }
}