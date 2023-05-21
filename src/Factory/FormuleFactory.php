<?php 

namespace App\Factory;

class FormuleFactory
{
    public function createFormule(string $formule = 'basic'): Formule
    {
        $calssName = "App\\Factory\\" . ucfirst($formule). "\\Formule";
        if(!class_exists($calssName)) throw new \Exception("le classe " . $calssName. " n\\'existe pas");
        return new $calssName();
    }
}