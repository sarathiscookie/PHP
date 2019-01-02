<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 2018-12-22
 * Time: 22:21
 */

interface service {

    public function cost();

    public function descriptions();
}

class oilChange implements service {

    public function cost() {
        return 25;
    }

    public function descriptions()
    {
        return 'Cost of Oil change';
    }
}

class wash implements service {

    protected $service;

    public function __construct(service $service)
    {
        $this->service = $service;
    }

    public function cost() {
        return 15 + $this->service->cost();
    }

    public function descriptions()
    {
        return $this->service->descriptions() . ' + car wash';
    }
}

class labourCharge implements service {

    protected $service;

    public function __construct(service $service)
    {
        $this->service = $service;
    }

    public function cost() {
        return 10 + $this->service->cost();
    }

    public function descriptions()
    {
        return $this->service->descriptions(). ' + labour charge';
    }
}

class tax implements service {

    protected $service;

    public function __construct(service $service)
    {
        $this->service = $service;
    }

    public function cost() {
        return 5 + $this->service->cost();
    }

    public function descriptions()
    {
        return 'Total amount including tax is';
    }
}

$oilChange = new oilChange();
var_dump($oilChange->descriptions(). ' : ' .$oilChange->cost());
echo '</br>';

$wash = new wash(new oilChange());
var_dump($wash->descriptions(). ' : ' .$wash->cost());
echo '</br>';

$labourCharge = new labourCharge(new wash(new oilChange()));
var_dump($labourCharge->descriptions(). ' : ' .$labourCharge->cost());
echo '</br>';

$total = new tax(new labourCharge(new wash(new oilChange())));
var_dump($total->descriptions(). ' : ' .$total->cost());

