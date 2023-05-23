<?php

namespace App\Decorator;


class ExtraDouche extends RentRoomDecorator
{
    private const DOUCH_PRICE = 150;
    public function calculatePrice():int 
    {
        return $this->rentRoom->calculatePrice() + self::DOUCH_PRICE;
    }
}
