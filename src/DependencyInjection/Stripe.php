<?php
namespace App\DependencyInjection;

class Stripe extends PaymentMethod
{
    public function process(): string
    {
        return "Payment avec Stripe";
    }
}