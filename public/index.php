<?php
//Imaginons que nous ayons besoin d'une entité permettant de gérer des livres pour une bibliothèque.
//
// Définissez une entité Book complète (classe, propriétés, getters et setters) correspondant à une table dont la
// structure est la suivante :
//
//Table Book
//Nom
//
//Type
//
//Null
//
//id
//
//int(11)
//
//Non
//
//isbn
//
//varchar(255)
//
//Non
//
//name
//
//varchar(255)
//
//Non
//
//date_published
//
//datetime
//
//Non
//
//La classe se situera dans le répertoire src/Entity/.
//
//On ne s'occupera pas des annotations dans cet exercice. L'objectif est de créer une simple classe PHP.

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
