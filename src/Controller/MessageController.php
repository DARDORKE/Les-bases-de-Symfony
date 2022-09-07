<?php

namespace App\Controller;

use App\Helper\MessageHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Routing\Annotation\Route;

class MessageController extends AbstractController
{
    public const MESSAGES = ['Bonjour', 'Bonsoir', 'Au revoir', 'Salut', 'Coucou', 'Ciao', 'Adieu', 'Bienvenue', 'Bonne nuit', 'Bye'];
    public const MESSAGES_PER_PAGE = 3;

    /**
     * @Route("/messages", name="message_list")
     */
    public function list(MessageHelper $messageHelper, Request $request): Response
    {
        $page = $request->query->getInt('page', 1);
        if ($page < 1) {
            throw new BadRequestHttpException('Le numéro de page doit être supérieur à 0');
        }

        // Calcule la position à partir de laquelle récupérer les éléments dans le tableau MESSAGES_PER_PAGE
        $offset = ($page - 1) * self::MESSAGES_PER_PAGE;

        // Prend les 3 messages à partir de l'indice de la page
        $messages = array_slice(self::MESSAGES, $offset, self::MESSAGES_PER_PAGE, true);

        return $this->json($messageHelper->addUrlsToMessages($messages));
    }

    /**
     * @Route("/messages/{id}", name="message_item")
     */
    public function item(int $id): Response
    {
        if (!isset(self::MESSAGES[$id])) {
            throw $this->createNotFoundException('Le message n\'existe pas');
        }

        return $this->json(self::MESSAGES[$id]);
    }
}