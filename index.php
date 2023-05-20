<?php declare(strict_types=1);

use App\Config\Config;
use App\Entity\Account;

define('BASE_PATH', dirname(__DIR__));

require_once dirname(__DIR__).'./designPatterns/vendor/autoload.php';

$account = new Account();
$account->setPassword('admin');