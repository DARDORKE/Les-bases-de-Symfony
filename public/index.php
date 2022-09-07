<?php

// Écrivez votre propre filtre Twig qui
// convertira vos booléens en chaîne de caractères : "Oui" pour true et "Non" pour false.


use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
