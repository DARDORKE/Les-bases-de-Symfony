<?php

// Créez votre premier contrôleur intitulé BasicController en vous aidant de la commande
// Symfony make:controller, puis personnalisez le message affiché pour renvoyer une réponse
// contenant du code HTML.
//
//Une fois votre contrôleur créé, installez la debug toolbar du
// profiler Symfony au moyen de la commande composer req profiler,
// et trouvez-y les informations concernant la Request et la Response.
use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
