<?php
// Créez un contrôleur qui servira à présenter l'auteur d'un blog et qui correspondra à
// la déclaration de route suivante :
//			index:
//			    path: /auteur-du-blog
//			    controller: App\Controller\AuteurController::index
// Votre contrôleur devra afficher "Bonjour, je suis 'nom' 'prénom',
// j'ai '00'ans et je suis l'auteur de ce blog!"Il y a deux options de "difficulté"
// possibles pour la réalisation de cet exercice :
//
//Vous écrivez votre phrase en une seule chaîne de caractère par exemple :
// Vous écrivez votre phrase en une seule chaîne de caractère par exemple :
// "Bonjour, je suis Sacha De Bourg-Palette, j'ai 9 ans et je suis l'auteur de ce blog!".
//
//Si vous êtes plus à l'aise, vous pouvez effectuer une interpolation en effectuant quelque chose comme  :
//
//CTRL+C pour copier, CTRL+V pour coller
//1
//"Bonjour, je suis $nom $prenom, j'ai $age ans et je suis l'auteur de ce blog!"
//Vous aurez alors à déclarer des variables dans votre contrôleur, comme vous le feriez en PHP .

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
