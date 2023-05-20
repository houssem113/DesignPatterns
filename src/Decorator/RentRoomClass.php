<?php

namespace App\Decorator;

class RentRoomClass implements RentRoomInterface
{
    public function calculatePrice():int
    {
        return 100;
    }
}