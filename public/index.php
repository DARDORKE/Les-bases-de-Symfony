<?php

// Reprenons notre exemple précédent, c'est maintenant à vous d'ajouter quelques headers à
// la réponse du contrôleur MessageController::item() :
//
//un header Cache-Control avec une durée d'une heure
//
//un header ETag contenant le hash md5 du contenu de notre réponse
//

//<?php
//
//// src/Controller/MessageController.php
//namespace App\Controller;
//
//use App\Helper\MessageHelper;
//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
//use Symfony\Component\Routing\Annotation\Route;
//
//class MessageController extends AbstractController
//{
//    public const MESSAGES = ['Bonjour', 'Bonsoir', 'Au revoir', 'Salut', 'Coucou', 'Ciao', 'Adieu', 'Bienvenue', 'Bonne nuit', 'Bye'];
//
//    /**
//     * @Route("/messages/{id}", name="message_item")
//     */
//    public function item(int $id): Response
//    {
//        if (!isset(self::MESSAGES[$id])) {
//            throw $this->createNotFoundException('Le message n\'existe pas');
//        }

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
