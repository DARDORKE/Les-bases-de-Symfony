<?php

// Le cahier des charges de l'exercice est le suivant :
//
// Une méthode correspondant à l'URL /utilisateurs renvoyant une liste d'utilisateurs paginée
// grâce à deux paramètres d'URL : page (qui définit la page courante) et limit
// (qui définit le nombre maximum d'éléments par page). Cette liste doit être au format JSON
// avec le code de retour HTTP 200.
//
//Une méthode correspondant à l'URL /utilisateurs/{prenom} renvoyant l'utilisateur correspondant
// en prenant garde à vérifier son existence. S'il existe, on renvoie l'information au format JSON
// avec le code de retour HTTP 200, une durée de cache d'une heure et un header ETAG. S'il n'existe pas,
// on affiche un message d'erreur toujours en JSON avec le code de retour HTTP 404 (utilisez la bonne constante).
//
//Une méthode correspondant à l'URL /users/{prenom} qui est une ancienne URL et qui doit maintenant
// être redirigée vers la route précédente avec le code de retour HTTP 301.
//
//Le tableau des utilisateurs est le suivant :
//public const USERS = [
//    ['name' => 'Paul'],
//    ['name' => 'Charlotte'],
//    ['name' => 'Mathilde'],
//    ['name' => 'Quentin'],
//    ['name' => 'Lisa'],
//    ['name' => 'Bastien'],
//    ['name' => 'Louise'],
//    ['name' => 'Eléonore'],
//    ['name' => 'Jonathan'],
//    ['name' => 'Pierre'],
//];

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
