<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 09/10/18
 * Time: 9:19 PM
 */

class event
{
    public $title;
    public $description;

    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }
}

$obj = new event('October', 'Not a season time');
var_dump($obj->title. ' ' .$obj->description);