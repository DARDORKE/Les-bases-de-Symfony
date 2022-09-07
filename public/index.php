<?php
// Définissez une entité correspondant à une table dont la structure est la suivante, grâce à la commande
// adéquate du composant Maker :
//
//Table Book
//Nom
//
//Type
//
//Null
//
//Clé primaire
//
//Unique
//
//id
//
//int(11)
//
//Non
//
//Oui
//
//isbn
//
//varchar(255)
//
//Non
//
//Non
//
//Oui
//
//name
//
//varchar(255)
//
//Non
//
//Non
//
//Non
//
//abstract
//
//longtext
//
//Oui
//
//Non
//
//Non
//
//number_of_pages
//
//int(11)
//
//Non
//
//Non
//
//Non
//
//date_published
//
//datetime
//
//Non
//
//Non
//
//Non
//
//Une fois terminé et toujours à l'aide du composant Maker, vous pourrez générer la migration puis
// mettre à jour la base de données.

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
