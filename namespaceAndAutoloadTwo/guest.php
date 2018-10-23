<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 22/10/18
 * Time: 7:55 PM
 */
namespace Tour;

class guest
{
    public $guestCount;

    public $days;

    public function guestFunction($guestCount, $days)
    {
        return $this->guestCount = $guestCount * $days;
    }
}