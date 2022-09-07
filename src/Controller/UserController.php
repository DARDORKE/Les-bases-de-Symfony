<?php

// src/Controller/UserController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    private const USERS = [
        ['name' => 'Nicolas', 'connected' => false],
        ['name' => 'Alice', 'connected' => true],
        ['name' => 'Grégory', 'connected' => false],
    ];

    #[Route('/list')]
    public function list(): Response
    {
        return $this->render('user/list.html.twig', [
            'users' => self::USERS,
        ]);
    }

    public function item(int $id): Response
    {
        return $this->render('user/list.html.twig', [
            'user' => self::USERS[$id],
        ]);
    }
}