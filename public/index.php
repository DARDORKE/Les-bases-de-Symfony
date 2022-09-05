<?php
// L'objectif va être de mettre en place ces pages :
//
//L'accueil (route : / )
//
//La page qui contient les articles ( routes : /articles )
//
//La page de contact ( route : /contact)
//
//La page '' A propos'' ( route : /a-propos)
//
//Vous aurez donc à créer plusieurs routes, plusieurs contrôleurs ainsi que plusieurs templates.
//
//N'hésitez pas à revenir sur le cours autant que possible si vous n'êtes pas à l'aise avec certaines notions.
//
//Bonus : Si vous le souhaitez, vous pouvez intégrer des variables dans vos contrôleurs pour les afficher.

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
