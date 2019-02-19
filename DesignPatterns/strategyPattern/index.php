<?php

require '../vendor/autoload.php';

use Strategy\ASort;
use Strategy\Ksort;
use Strategy\Sort;

$age   = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

$ksort = new Ksort;

$ksort->sort($age);