<?php

// src/Controller/UserController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController
{
    private const USERS = [
        ['name' => 'Nicolas', 'connected' => false],
        ['name' => 'Alice', 'connected' => true],
        ['name' => 'Grégory', 'connected' => false],
    ];

    public function list(): Response
    {
        return $this->render('../templates/list.html.twig', [
            'users' => self::USERS,
        ]);
    }

    public function item(int $id): Response
    {
        return $this->render('../templates/list.html.twig', [
            'user' => self::USERS[$id],
        ]);
    }
}