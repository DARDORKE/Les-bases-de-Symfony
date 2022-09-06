<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        $content = 'Bienvenue sur mon blog, mettez-vous à l\'aise!';
        return $this->render(view: 'accueil.html.twig', parameters: [
            'title' => 'Ma page de contact',
            'content' => $content
        ]);
    }

}

