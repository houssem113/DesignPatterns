<?php declare(strict_types=1);

use App\Config\Config;
use App\Decorator\ExtraCofeeMachine;
use App\Decorator\ExtraGargen;
use App\Decorator\RentRoomClass;
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
// Le design pattern Injection de dépendance est un modèle de conception qui vise à réduire 
// les dépendances directes entre les classes. Au lieu de créer et d'instancier des objets 
// directement à l'intérieur d'une classe, l'injection de dépendance consiste à fournir 
// les dépendances nécessaires à une classe depuis l'extérieur.



//Decorator Pattern

$reservation = new RentRoomClass(); // 100
$reservation = new ExtraCofeeMachine($reservation); //150
$reservation = new ExtraGargen($reservation); // 350
 
// Le design pattern Decorator est un modèle de conception qui permet 
// d'ajouter de nouvelles fonctionnalités à un objet existant de manière souple et dynamique. 
// Il utilise des couches décoratives appelées "décorateurs" pour envelopper l'objet de base 
// et lui ajouter des fonctionnalités supplémentaires. Cela permet d'étendre les capacités de 
// l'objet sans modifier sa structure de base et offre une alternative à la création 
// de sous-classes multiples.

var_dump($reservation->calculatePrice());


