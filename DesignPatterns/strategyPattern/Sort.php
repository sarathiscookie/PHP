<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 2019-02-19
 * Time: 23:28
 */

namespace Strategy;


class Sort
{
    protected $array;

    //protected $result;

    private $sortingInterface;

    public function __construct(SortingInterface $sortingInterface)
    {
        $this->sortingInterface = $sortingInterface;
    }

    public function sortingClass($array)
    {
        return $this->sortingInterface->sort($array);
    }

}