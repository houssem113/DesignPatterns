<?php
namespace App\Decorator;

class ExtraGargen extends RentRoomDecorator
{   
    private const GARDEN_PRICE = 200;
    public function calculatePrice():int 
    {
        return $this->rentRoom->calculatePrice() + self::GARDEN_PRICE;
    }
}