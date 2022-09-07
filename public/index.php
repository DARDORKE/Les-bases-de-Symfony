<?php

// Vous disposez de l'extrait de code suivant, créez un service qui permettra d'externaliser
// le contenu de la méthode MessageController::list():

//<?php
//
//// src/Controller/MessageController.php
//namespace App\Controller;
//
//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Routing\Annotation\Route;
//
//class MessageController extends AbstractController
//{
//    public const MESSAGES = ['Bonjour', 'Bonsoir', 'Au revoir'];
//
//    /**
//     * @Route("/messages", name="message_list")
//     */
//    public function list(): Response
//    {
//        $messagesWithURLs = [];
//
//        foreach (self::MESSAGES as $index => $message) {
//            $messagesWithURLs[] = [
//                'text' => $message,
//                'url' => $this->generateUrl('message_item', ['id' => $index]),
//            ];
//        }
//
//        return $this->json($messagesWithURLs);
//    }
//}
use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
