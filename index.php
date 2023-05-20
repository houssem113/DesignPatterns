<?php declare(strict_types=1);

use App\Config\Config;

define('BASE_PATH', dirname(__DIR__));

require_once dirname(__DIR__).'./designPatterns/vendor/autoload.php';


var_dump(Config::getValues('password'));