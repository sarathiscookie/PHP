<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 23/10/18
 * Time: 7:56 PM
 */

$array1 = array(22, 33, 11); //0->11, 1->22, 2->33

$array2 = array(56, 36, 26); //0->11->26, 0->22->56, 0->33->36

array_multisort($array1, $array2);

var_dump($array1);

var_dump($array2);