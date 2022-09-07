<?php

// En se basant sur l'exemple précédent enrichi de quelques messages, mettez en place un système
// de pagination pour vos messages en ajoutant dans l'URL un paramètre page correspondant au numéro de la page.
// Essayez par vous-même dans un premier temps. Si vous trouvez la tâche un peu trop ardue par cette
// nouvelle notion de pagination, vous retrouverez dans la solution une aide vous expliquant pas à pas
// comment la mettre en place.
//<?php
//
//// src/Controller/MessageController.php
//namespace App\Controller;
//
//use App\Helper\MessageHelper;
//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Routing\Annotation\Route;
//
//class MessageController extends AbstractController
//{
//    public const MESSAGES = ['Bonjour', 'Bonsoir', 'Au revoir', 'Salut', 'Coucou', 'Ciao', 'Adieu', 'Bienvenue', 'Bonne nuit', 'Bye'];
//
//    /**
//     * @Route("/messages", name="message_list")
//     */
//    public function list(MessageHelper $messageHelper): Response
//    {
//        return $this->json($messageHelper->addUrlsToMessages(self::MESSAGES));
//    }
//
//    /**
//     * @Route("/messages/{id}", name="message_item")
//     */
//    public function item(int $id): Response
//    {
//        if (!isset(self::MESSAGES[$id])) {
//            throw $this->createNotFoundException('Le message n\'existe pas');
//        }
//
//        return $this->json(self::MESSAGES[$id]);
//    }
//}
use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
