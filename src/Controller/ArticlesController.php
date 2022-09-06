<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
    #[Route('/articles', name: 'articles')]
    public function index(): Response
    {
        return $this->render('articles.html.twig', [
            'title' => 'Tous mes articles'
        ]);
    }

}