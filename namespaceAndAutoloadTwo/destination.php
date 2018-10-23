<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 22/10/18
 * Time: 7:55 PM
 */
namespace Tour;

class destination
{
    public $place = 'Wayanad';

    public function placeFunction($place)
    {
        return $this->place = $place;
    }
}