<?php

namespace App\Polymorphisme\AlertMessages;

use App\Polymorphisme\Messages\MessageInterface;

class WarnningMessage implements MessageInterface
{
    public function getType(): string
    {
        return 'warnning';
    }
    public function getColor(): string
    {
        return 'color';
    }
}