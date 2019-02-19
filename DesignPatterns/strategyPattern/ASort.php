<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 2019-02-19
 * Time: 23:27
 */

namespace Strategy;


class ASort
{
    protected $array;

    public function sort($array)
    {
        asort($array);
    }
}