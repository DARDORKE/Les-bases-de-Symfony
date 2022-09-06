<?php

namespace App\Controller;

use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

#[Route("/challenge", name: 'challenge')]
class RoutingChallengeController extends AbstractController
{

    #[Route("/send-result/{id}", requirements: ['id' => '\d+'], methods: 'POST')]
    public function sendResult(string $id): RedirectResponse
    {
        $url = $this->generateUrl('challengeapp_routingchallenge_getuseranswers', ['username' => 'John']);

        return new RedirectResponse($url);
    }

    #[Route("/user-answers/{username}/{_format", requirements: ['_format' => 'html|json'], methods: 'GET')]
    public function getUserAnswers(string $username)
    {
        return new JsonResponse('TEST');
    }

    #[Route("/user-answers/{username}/{id}")]
    public function getUserAnswer(string $username, int $id = 1)
    {
    }
}