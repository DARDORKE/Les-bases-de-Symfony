<?php

// src/Controller/MessageController.php
namespace App\Controller;

use App\Helper\MessageHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MessageController extends AbstractController
{
    public const MESSAGES = ['Bonjour', 'Bonsoir', 'Au revoir'];

    #[Route("/messages", name: "message_list")]
    public function list(MessageHelper $messageHelper): Response
    {
        return $this->json($messageHelper->addUrlsToMessages(self::MESSAGES));
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