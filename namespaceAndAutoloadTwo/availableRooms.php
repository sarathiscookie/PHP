<?php
/**
 * Created by PhpStorm.
 * User: sarathts
 * Date: 30/10/18
 * Time: 8:39 PM
 */
namespace Tour;

class availableRooms
{
    protected $rooms;

    protected $guests;

    public function __construct(resort $resort)
    {
        $this->rooms = $resort;
    }

    public function show()
    {
        $this->rooms->rooms();
    }
}