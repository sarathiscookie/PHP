<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 22/10/18
 * Time: 7:55 PM
 */
namespace Tour;

class resort
{
    protected $resortName    = 'SK';

    public function resortDetails($resortName)
    {
        return $this->resortName = $resortName;
    }
}