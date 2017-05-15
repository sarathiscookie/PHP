<?php
$mongo = new MongoDB\Driver\Manager("mongodb://localhost:27017");

//$collection = (new MongoDB\Driver)->test->restaurants;

$filter = ['name' => 'Vella'];
$options = [
    'projection' => ['_id' => 0],
];
$query = new MongoDB\Driver\Query($filter, $options);
$rows = $mongo->executeQuery('test.restaurants', $query);
foreach($rows as $r){
    print_r($r);
}
