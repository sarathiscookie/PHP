<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 14/11/18
 * Time: 8:23 PM
 */
require 'vendor/autoload.php';

use Traits\series;

$mobDetails = new series;

var_dump($mobDetails->seriesFunc());

var_dump($mobDetails->batteryTraitFunc());

var_dump($mobDetails->cameraTraitFunc());