<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 2019-01-03
 * Time: 21:19
 */

namespace Decorator;

class decoratorPatternTaxServiceAutoload implements decoratorInterfaceVehicleServiceAutoload {

    public function cost()
    {
        return 10;
    }
}
