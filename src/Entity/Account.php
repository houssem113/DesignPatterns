<?php 
namespace App\Entity;

class Account
{
    private string $password;

    /**
     * Set the value of password
     *
     * @return  void
     */ 
    public function setPassword(string $password): void
    {
        if (!preg_match('/[$*%]/', $password)) throw new \Exception('Le mot de password doit etre complexe');
        $this->password = $password;
    }

}