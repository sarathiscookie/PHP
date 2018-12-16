<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 2018-12-11
 * Time: 22:18
 */

interface shape {

    public function areaCalculation();
}

class rectangle implements shape {

    public $length;

    public $breadth;

    public function __construct($length, $breadth)
    {
        $this->length  = $length;
        $this->breadth = $breadth;
    }

    public function areaCalculation()
    {
        return $this->length * $this->breadth;
    }

}

class circles implements shape {

    public $radius;

    public function __construct($radius)
    {
        $this->radius  = $radius;
    }

    public function areaCalculation()
    {
        return 3.14 * $this->radius * $this->radius;
    }

}

$obj = new rectangle(20,30);

echo $obj->areaCalculation();

echo '<br>';

$obj = new circles(20);

echo $obj->areaCalculation();