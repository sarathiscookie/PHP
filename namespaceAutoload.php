<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 16/10/18
 * Time: 8:26 PM
 */

require 'vendor/autoload.php';

use App\user\Person;
use App\Staff;
use App\Business;

$person   = new Person('Jane Doe');

$staff    = new Staff();

$company  = new Business($staff);

$company->hire($person);

var_dump($staff);

// In index.php page we can include require 'vendor/autoload.php'; && require 'namespaceAutoload.php';
// When we access index.php we can see the result