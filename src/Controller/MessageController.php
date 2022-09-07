<?php

// src/Controller/MessageController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MessageController extends AbstractController
{
    public const MESSAGES = ['Bonjour', 'Bonsoir', 'Au revoir'];

    /**
     * @Route("/messages", name="message_list")
     */
    public function list(): Response
    {
        $messagesWithURLs = [];

        foreach (self::MESSAGES as $index => $message) {
            $messagesWithURLs[] = [
                'text' => $message,
                'url' => $this->generateUrl('message_item', ['id' => $index]),
            ];
        }

        return $this->json($messagesWithURLs);
    }
}