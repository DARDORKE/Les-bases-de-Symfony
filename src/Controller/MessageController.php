<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MessageController extends AbstractController
{
    public const MESSAGES = ['Bonjour', 'Bonsoir', 'Au revoir'];

    #[Route("/messages", name: "message_list")]
    public function list(): Response
    {
        $messages = [];

        foreach (self::MESSAGES as $index => $message) {
            $messages[] = [
                'text' => $message,
            ];
        }

        return $this->json($messages);
    }

    #[Route("/messages/{id}", name: "message_item")]
    public function item(int $id): Response
    {
        if (!isset(self::MESSAGES[$id])) {
            throw $this->createNotFoundException('Le message n\'existe pas');
        }

        return $this->json(self::MESSAGES[$id]);
    }
}