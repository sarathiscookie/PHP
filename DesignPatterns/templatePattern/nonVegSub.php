<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 2019-02-07
 * Time: 00:03
 */

namespace Template;


class nonVegSub extends abstractVegNonVeg
{
    public function addMealType()
    {
        echo 'Add some turkey.';

        return $this;
    }
}