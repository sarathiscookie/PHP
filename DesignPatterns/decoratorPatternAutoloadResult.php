<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 2019-01-03
 * Time: 21:38
 */

require '../vendor/autoload.php';

use Decorator\decoratorPatternTaxServiceAutoload;

use Decorator\decoratorPatterWaterServiceAutoload;

$result = new decoratorPatterWaterServiceAutoload(new decoratorPatternTaxServiceAutoload());

echo $result->cost();