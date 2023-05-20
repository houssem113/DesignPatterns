<?php
namespace App\DependencyInjection;

class Paypal extends PaymentMethod
{
    public function process(): string
    {
        return "Payment avec Paypal";
    }
}