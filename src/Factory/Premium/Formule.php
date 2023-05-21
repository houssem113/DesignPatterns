<?php

namespace App\Factory\Premium;

use App\Factory\Formule as FormuleBase;

class Formule extends FormuleBase
{   
    const PRICE = 50;
    protected array $informations = ['Prix de 50 euro avec garantie']; 
    public function getPrice(): int
    {
        return self::PRICE;
    }
}