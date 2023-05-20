<?php

namespace App\DependencyInjection;

Abstract class PaymentMethod  
{
    abstract public function process(): string;
}
