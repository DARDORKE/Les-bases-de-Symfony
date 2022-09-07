<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    public const USERS = [
        ['name' => 'Paul'],
        ['name' => 'Charlotte'],
        ['name' => 'Mathilde'],
        ['name' => 'Quentin'],
        ['name' => 'Lisa'],
        ['name' => 'Bastien'],
        ['name' => 'Louise'],
        ['name' => 'Eléonore'],
        ['name' => 'Jonathan'],
        ['name' => 'Pierre'],
    ];
    public const USERS_PER_PAGE = 5;

    /**
     * @Route("/utilisateurs")
     */
    public function list(Request $request): Response
    {
        $users = self::USERS;
        $page = $request->query->getInt('page', 1);
        $usersPerPage = $request->query->getInt('limit', self::USERS_PER_PAGE);

        if ($request->query->has('page') || $request->query->has('limit')) {
            $users = array_slice($users, ($page - 1) * $usersPerPage, $usersPerPage);
        }

        return $this->json($users);
    }

    /**
     * @Route("/utilisateurs/{name}")
     */
    public function item(string $name): Response
    {
        $user = current(array_filter(self::USERS, function (array $user) use ($name): bool {
            return strtolower($user['name']) === strtolower($name);
        }));

        if (!$user) {
            return $this->json(['message' => 'Utilisateur inexistant'], Response::HTTP_NOT_FOUND);
        }

        $response = $this->json($user);
        $response->setSharedMaxAge(3600);
        $response->setEtag(md5($response->getContent()));

        return $response;
    }

    /**
     * @Route("/users/{name}")
     */
    public function oldItem(string $name): Response
    {
        return $this->redirectToRoute('app_user_item', ['name' => $name], Response::HTTP_MOVED_PERMANENTLY);
    }
} 