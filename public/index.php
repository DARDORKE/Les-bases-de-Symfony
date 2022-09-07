<?php

// À partir du contrôleur suivant, affichez la liste des utilisateurs et, pour chacun d'eux,
// leur statut de connexion. Prévoyez aussi un texte dans le cas où la liste des utilisateurs serait vide.

//<?php
//
//// src/Controller/UserController.php
//namespace App\Controller;
//
//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\HttpFoundation\Response;
//
//class UserController extends AbstractController
//{
//    private const USERS = [
//        ['name' => 'Nicolas', 'connected' => false],
//        ['name' => 'Alice', 'connected' => true],
//        ['name' => 'Grégory', 'connected' => false],
//    ];
//
//    public function list(): Response
//    {
//        return $this->render('user/list.html.twig', [
//            'users' => self::USERS,
//        ]);
//    }
//
//    public function item(int $id): Response
//    {
//        return $this->render('user/item.html.twig', [
//            'user' => self::USERS[$id],
//        ]);
//    }
//}


use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
