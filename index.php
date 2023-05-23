<?php declare(strict_types=1);

use App\Singleton\Config;
use App\Decorator\ExtraCofeeMachine;
use App\Decorator\ExtraGargen;
use App\Decorator\RentRoomClass;
use App\DependencyInjection\Payment;
use App\DependencyInjection\Paypal;
use App\DependencyInjection\Stripe;
use App\Entity\Account;
use App\Factory\FormuleFactory;
use App\Polymorphisme\Messages\MessageGenerator;
use App\Polymorphisme\AlertMessages\DefaultMessage;
use App\Polymorphisme\AlertMessages\WarnningMessage;
use Enum\Status;

define('BASE_PATH', dirname(__DIR__));

require_once dirname(__DIR__).'./designPatterns/vendor/autoload.php';

// Singleton
var_dump(Config::getValues('host'));
var_dump(Config::getValues('username'));
// Le design pattern Singleton est un modèle de conception qui garantit qu'une classe 
// ne possède qu'une seule instance dans tout le programme. Il fournit un point d'accès global 
// à cette instance unique.Le Singleton implémente généralement un mécanisme qui permet de créer 
// une seule instance lors de la première demande et de renvoyer cette même instance pour les demandes 
// ultérieures. Il fournit également des méthodes pour accéder à cette instance unique.



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

// Polymorphisme

$messageGenerator = new MessageGenerator();
$defaultMessage = new DefaultMessage();
$warnningMessage = new WarnningMessage();

var_dump($messageGenerator->generate($defaultMessage));  // default color
var_dump($messageGenerator->generate($warnningMessage)); // warning color

// En termes simples, cela signifie que des objets de différentes classes peuvent être traités 
// de la même manière, en utilisant une méthode commune, même s'ils ont des comportements 
// spécifiques différents. Cela permet d'écrire du code générique et réutilisable, 
// qui peut fonctionner avec divers types d'objets sans avoir besoin de connaître leur classe spécifique.


// Factory 

$factory = new FormuleFactory();

$basicFormule = $factory->createFormule('basic');
var_dump($basicFormule);

$premiumFormule = $factory->createFormule('premium');
var_dump($premiumFormule);

// Le design pattern Factory est un modèle de conception qui fournit une méthode générique pour 
// créer des objets sans spécifier explicitement leur classe concrète. 
// Il encapsule le processus de création d'objets dans une méthode ou une classe dédiée, 
// appelée "fabrique" (factory).. La fabrique est chargée de créer et d'instancier les objets 
// appropriés en fonction des paramètres ou des conditions spécifiés. 
// Ainsi, le code client n'a pas besoin de connaître les détails de la création d'objets 
// et reste indépendant des classes concrètes.


// Enum

$status = Status::fromStatusCode(1);
var_dump($status); // Success
// Une énumération est un type de données spécial qui permet de définir un ensemble fini de valeurs 
// constantes nommées. Cela facilite la création de variables dont la valeur ne peut être qu'une 
// des constantes prédéfinies de l'énumération. 
// Les énumérations sont souvent utilisées pour représenter des ensembles de choix possibles.
// Notez que les énumérations en PHP 8.1 sont des classes spéciales, et les constantes de 
// l'énumération sont des instances uniques de cette classe. 