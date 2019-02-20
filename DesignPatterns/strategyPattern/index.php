<?php

require '../../vendor/autoload.php';

use Strategy\ASort;
use Strategy\Ksort;
use Strategy\Sort;

$age  = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

$sort = new Sort(new ASort);

$sort = new Sort(new KSort);

echo '<p>To separate strategy and to enable fast switching between them</p>';
echo $sort->sortingClass($age);

echo $sort->sortingClass($age);
