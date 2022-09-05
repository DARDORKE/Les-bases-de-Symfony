<?php
//Définissez une route post_list: affichant l'ensemble des articles d'un blog.
// La méthode affichant les articles se nomme list et se trouve dans le contrôleur
// PostController placé dans le dossier src/Controller.
// L'URL de la route doit être https://www.example.com/liste-des-articles.

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
