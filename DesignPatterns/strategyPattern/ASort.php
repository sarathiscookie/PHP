<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 2019-02-19
 * Time: 23:27
 */

namespace Strategy;


class ASort implements SortingInterface
{
    protected $array;

    public function sort($array)
    {
        asort($array);

        $result = '';

        foreach($array as $key => $values)
        {
            $result.= "Key=" . $key . ", Value=" . $values;
            $result.= "<br>";
        }

        return $result;
    }
}