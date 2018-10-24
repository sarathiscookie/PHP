<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 24/10/18
 * Time: 8:12 PM
 */
class Math
{
    public function addDot(...$num)
    {
        return array_sum($num);
    }

    public function addFuncArg($num)
    {
        return array_sum(func_get_args($num));
    }

    public function addWithoutArraySum(...$num)
    {
        $total = 0;

        foreach($num as $val) {
            $total += $val;
        }

        return $total;
    }
}

$math = new Math();

var_dump($math->addDot(1,2,3,4,5,6));

var_dump($math->addFuncArg(1,2,3,4,5,6));

var_dump($math->addWithoutArraySum(1,2,3,4,5,6));