<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 08/11/18
 * Time: 10:54 AM
 */
namespace Abstractt;

use Abstractt\abstractClass;

class coffee extends abstractClass
{
    public function addPrimaryToppings()
    {
        var_dump('Add proper amount of coffee');
        return $this;
    }
}