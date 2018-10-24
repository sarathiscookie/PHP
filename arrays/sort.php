<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 23/10/18
 * Time: 10:11 PM
 */

$array = array('orange', 'red', 'yellow');

sort($array,SORT_ASC);

foreach($array as $key => $value) {
    var_dump($value);
}
