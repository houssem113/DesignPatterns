<?php
namespace App\Decorator;

class ExtraCofeeMachine extends RentRoomDecorator
{   
    private const COFFEE_PRICE = 50;
    public function calculatePrice():int 
    {
        return $this->rentRoom->calculatePrice() + self::COFFEE_PRICE;
    }
}