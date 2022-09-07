<?php

//Complétez le fichier homepage.html.twig et son contrôleur, en utilisant :
//
//une variable title dans la balise <title> (en-tête) et <h1> (corps) : « MDN web docs »
//
//une variable content dans un paragraphe HTML : « Des ressources pour les développeurs, par les développeurs. »


//{# templates/homepage.html.twig #}
//<!DOCTYPE html>
//<html lang="fr">
//    <head>
//        <meta charset="UTF-8">
//        <title></title>
//    </head>
//    <body>
//        <h1></h1>
//        <p></p>
//    </body>
//</html>


//<?php
//
//// src/Controller/HomepageController.php
//namespace App\Controller;
//
//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//
//class HomepageController extends AbstractController
//{
//    public function homepage()
//    {
//        return $this->render('homepage.html.twig', [
//            'title' =>
//            'content' =>
//        ]);
//    }
//}

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
