<?php

namespace App\Singleton;


class Config
{
    private static $instance;
    private static array $values = [];

    public function __construct()
    {
        self::$values['host'] = 'localhost';
        self::$values['username'] = 'root';
        self::$values['password'] = '';
        self::$values['db_name'] = 'exemple';

    }
    public static function init(): self
    {   
        if(is_null(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public static function getValues(string $key): string
    {
        self::init();
        return self::$values[$key] ?? 'none';
    }
}

