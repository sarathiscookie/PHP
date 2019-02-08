<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 2019-02-07
 * Time: 00:08
 */

require '../../vendor/autoload.php';

use Template\vegSub;

$obj = new vegSub;

echo $obj->make();