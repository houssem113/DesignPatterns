<?php

namespace App\Polymorphisme\AlertMessages;

use App\Polymorphisme\Messages\MessageInterface;

class DefaultMessage implements MessageInterface
{
    public function getType(): string
    {
        return 'default';
    }
    public function getColor(): string
    {
        return 'color';
    }
}