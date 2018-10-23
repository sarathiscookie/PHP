<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 22/10/18
 * Time: 8:10 PM
 */
require 'vendor/autoload.php';

use Tour\destination;

use Tour\guest;

use Tour\resort;

$destination    = new destination();

$guest          = new guest();
$total          = $guest->guestFunction(5, 2);

$destination    = new destination();

$resort         = new resort();

var_dump($resort);
