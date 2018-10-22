<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 15/10/18
 * Time: 10:35 PM
 */
abstract class shape
{
    protected $color = null;

    abstract function setColor($color);

    public function getColor()
    {
        return $this->color;
    }

    public function describe() {
        return sprintf("I'm a %s %s\n", $this->getColor(), get_class($this));
    }
}

class circle extends shape
{
    protected $color = null;

    public function setColor($color)
    {
        $this->color = $color;
    }
}

class square extends shape
{
    protected $color = null;

    public function setColor($color)
    {
        $this->color = $color;
    }
}

$data = new square();

$data->setColor('Green');

echo $data->describe();