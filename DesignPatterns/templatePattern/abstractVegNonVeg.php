<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 2019-02-08
 * Time: 15:49
 */

namespace Template;


abstract class abstractVegNonVeg
{
    public function make()
    {
        return $this
            ->layBread()
            ->addLettuce()
            ->addSauces()
            ->addMealType();
    }

    protected function layBread()
    {
        echo 'Laying down the bread.';

        return $this;
    }

    protected function addLettuce()
    {
        echo 'Add some lettuce.';

        return $this;
    }

    protected function addSauces()
    {
        echo 'Add oil an vinegar.';

        return $this;
    }

    protected abstract function addMealType();
}