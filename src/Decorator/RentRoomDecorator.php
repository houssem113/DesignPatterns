<?php
namespace App\Decorator;

abstract class RentRoomDecorator implements RentRoomInterface
{
    protected RentRoomInterface $rentRoom;

    public function __construct(RentRoomInterface $rentRoom)
    {
        $this->rentRoom = $rentRoom;
    }
}