<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 2019-02-06
 * Time: 23:58
 */

namespace Template;

class vegSub
{
    public function make()
    {
        /*return $this
            ->layBread()
            ->addLettuce()
            ->addVeg()
            ->addSauces();*/
        return 'veg make';
    }

    public function layBread()
    {
        return 'Laying down the bread';
    }

    public function addLettuce()
    {
        return 'Add some lettuce';
    }

    public function addVeg()
    {
        return 'Add some vegetarian';
    }

    public function addSauces()
    {
        return 'Add oil an vinegar';
    }
}