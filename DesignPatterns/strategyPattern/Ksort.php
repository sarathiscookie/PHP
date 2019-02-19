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

        foreach($array as $x=>$x_value)
        {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }
    }
}