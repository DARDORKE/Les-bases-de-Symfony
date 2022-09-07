<?php

// En partant de l'exercice précédent, réécrivez le template de la liste des utilisateurs
// en utilisant :
//
//un template parent qui sera étendu
//
//un template partiel qui sera utilisé dans la boucle des utilisateurs
//
//un template pour la vue qui fera le liant entre les deux autres templates
//
//Pour rappel :

//<!DOCTYPE html>
//<html lang="fr">
//    <body>
//        <h1>Les utilisateurs</h1>
//        <ul>
//            {% for user in users %}
//            <li>{{ user.name }} : {% if user.connected %}Connecté{% else %}Non connecté{% endif %}</li>
//            {% else %}
//            <li>Aucune utilisateur trouvé !</li>
//            {% endfor %}
//        </ul>
//    </body>
//</html>


use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
