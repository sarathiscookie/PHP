<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 2019-02-19
 * Time: 23:25
 */

namespace Strategy;


class Ksort implements SortingInterface
{
    protected $array;

    public function sort($array)
    {
        ksort($array);

        $result = '';

        foreach($array as $key => $values)
        {
            $result.= "Key=" . $key . ", Value=" . $values;
            $result.= "<br>";
        }

        return $result;
    }
}