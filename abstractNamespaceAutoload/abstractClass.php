<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 08/11/18
 * Time: 11:08 AM
 */

namespace Abstractt;

abstract class abstractClass
{
    public function addMilk()
    {
        var_dump('Add proper amount of milk');
        return $this;
    }

    public function addHotWater()
    {
        var_dump('Pour hot water in to cup');
        return $this;
    }

    public function addSugar()
    {
        var_dump('Add proper amount of sugar');
        return $this;
    }

    public function make()
    {
        return $this->addHotWater()
            ->addMilk()
            ->addSugar()
            ->addPrimaryToppings();
    }

    protected abstract function addPrimaryToppings();

}