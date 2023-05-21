<?php

namespace App\Factory\Basic;

use App\Factory\Formule as FormuleBase;

class Formule extends FormuleBase
{   
    const PRICE = 0;
    protected array $informations = ['Prix gratuit mais aucune garantie']; 
    public function getPrice(): int
    {
        return self::PRICE;
    }
}