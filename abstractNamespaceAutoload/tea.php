<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 08/11/18
 * Time: 10:54 AM
 */

namespace Abstractt;

use Abstractt\abstractClass;

class tea extends abstractClass
{
    public function addPrimaryToppings()
    {
        var_dump('Add proper amount of tea');
        return $this;
    }
}