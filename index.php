<?php declare(strict_types=1);

use App\Config\Config;
use App\DependencyInjection\Payment;
use App\DependencyInjection\Paypal;
use App\DependencyInjection\Stripe;
use App\Entity\Account;

define('BASE_PATH', dirname(__DIR__));

require_once dirname(__DIR__).'./designPatterns/vendor/autoload.php';

// Dependency injection
$stripe = new Stripe();
//$paypal = new Paypal();

$payment = new Payment($stripe);
$payment->processPayment();
