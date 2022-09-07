<?php

// Écrivez votre propre fonction Twig qui calculera la moyenne de commentaires par articles
// pour chaque utilisateur, en utilisant cette liste d'utilisateurs :

//private const USERS = [
//    ['name' => 'Nicolas', 'connected' => false, 'commentsPerPost' => [3, 6, 10, 2]],
//    ['name' => 'Alice', 'connected' => true, 'commentsPerPost' => [15, 5, 7, 5, 22, 10, 9, 3]],
//    ['name' => 'Grégory', 'connected' => false, 'commentsPerPost' => []],
//];


use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
