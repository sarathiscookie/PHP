<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 2018-12-16
 * Time: 20:08
 */

class guest {

    public function __construct()
    {
        echo 'Guest Details.';
    }

    public function __call($name, $arguments)
    {
        if ($name === 'guestDetails') {

            $count = count($arguments);

            switch($count) {

                case "1":
                    echo "Single Parameter.";
                    break;

                case "2":
                    echo "Double Parameter.";
                    break;

                case "3":
                    echo "Triple Parameter.";
                    break;

                default:
                    echo "Wrong input.";
                    break;
            }
        }
    }
}

$obj = new guest;

$obj->guestDetails('Jane', 25, 'kochi');
$obj->guestDetails('Jane', 25);
$obj->guestDetails('Jane');