<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends AbstractController
{
    #[Route('/', 'blog-index')]
    public function index()
    {
        return new Response(
            content: '<html><body>Accueil</body></html>'
        );
    }

    #[Route('/posts', 'blog_posts')]
    public function posts()
    {
        return new Response(
            content: '<html lang="en"><body>Liste des articles</body></html>'
        );
    }
}