<?php 

namespace App\Factory;

abstract class Formule 
{   
    protected array $informations = []; 
    abstract public function getPrice() : int;

    public function getInformations() : array
    {
        return $this->informations;
    }
}