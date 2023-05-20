<?php

namespace App\DependencyInjection;

class Payment 
{
    private PaymentMethod $paymentMethod;

    public function __construct(PaymentMethod $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function processPayment(): bool
    {
        echo  $this->getPaymentMethod()->process();
        return true;
    }

    /**
     * Get the value of paymentMethod
     */ 
    public function getPaymentMethod(): PaymentMethod
    {
        return $this->paymentMethod;
    }
}