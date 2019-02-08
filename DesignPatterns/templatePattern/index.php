<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 2019-02-07
 * Time: 00:08
 */

require '../../vendor/autoload.php';

use Template\vegSub;

use Template\nonVegSub;

$veg       = new vegSub;

$nonVegSub = new nonVegSub;

$veg->make();

$nonVegSub->make();