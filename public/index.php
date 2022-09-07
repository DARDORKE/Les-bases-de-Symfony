<?php

//Vous disposez du code suivant, créez deux fonctions au sein d'un même contrôleur :
//
//Une pour lister les messages dont le nom sera list, retournant une réponse au format format JSON
// et dont l'URL sera /messages
//
//Une pour afficher un message par son index au format JSON (en prenant bien
// soin de vérifier que le message existe)
//<?php
//
//namespace App\Controller;
//
//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Routing\Annotation\Route;
//
//class MessageController extends AbstractController
//{
//    public const MESSAGES = ['Bonjour', 'Bonsoir', 'Au revoir'];
//}
use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
