<?php 

namespace App\Polymorphisme\Messages;

interface  MessageInterface
{
    public function getType(): string;
    public function getColor(): string;
}