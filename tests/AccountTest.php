<?php

use App\Entity\Account;
use PHPUnit\Framework\TestCase;

class AccountTest extends TestCase
{
    public function testIfAccountThrowExceptionIfPasswordDosntContainSpecialCharacter()
    {
        $account = new Account();
        $this->expectException(\Exception::class);
        $account->setPassword('admin');
    }

    public function testIfAccountThrowRigthExceptionMessage()
    {
        try{
            $account = new Account();
            $account->setPassword('admin');
        }catch(\Exception $e){
            $this->assertStringContainsString('Le mot de password doit etre complexe', $e->getMessage());
        }
    }
}