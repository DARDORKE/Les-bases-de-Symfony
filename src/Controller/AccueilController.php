<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AccueilController extends AbstractController
{

    public function index(): Response
    {
        $content = 'Bienvenue sur mon blog, mettez-vous à l\'aise!';
        return $this->render('accueil.html.twig', [
            'title' => 'Ma page de contact',
            'content' => $content
        ]);
    }

}
