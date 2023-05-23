<?php

namespace Enum;

Enum Status 
{
    case Pending = 2;
    case Success = 1;
    case Failed = 0;

    public function getMessage(): string
    {
        return "Le status est " .$this->name;
    }

    public static function fromStatusCode(int $statusCode): static
    {
        return match(true){
            $statusCode === 0 => static::Failed,
            $statusCode === 1 => static::Success,
            $statusCode === 2 => static::Pending
        };
    }
}