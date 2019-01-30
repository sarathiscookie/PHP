<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 2019-01-30
 * Time: 20:30
 */
require '../../vendor/autoload.php';

use Adapter\Paypal;

$obj = new Paypal;

echo $obj->sendPayment(12);