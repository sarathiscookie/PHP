<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 2019-02-06
 * Time: 23:58
 */

namespace Template;

class vegSub extends abstractVegNonVeg
{

    public function addMealType()
    {
        echo 'Add some vegetarian.';

        return $this;
    }
}