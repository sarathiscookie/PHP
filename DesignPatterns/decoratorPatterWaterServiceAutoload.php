<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 2019-01-03
 * Time: 21:31
 */


namespace Decorator;

class decoratorPatterWaterServiceAutoload implements decoratorInterfaceVehicleServiceAutoload {

    protected $tax;

    public function __construct(decoratorPatternTaxServiceAutoload $tax)
    {
        $this->tax = $tax;
    }

    public function cost()
    {
        return $this->tax->cost() * 10;
    }
}
