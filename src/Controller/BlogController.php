<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends AbstractController
{
    #[Route('/', 'blog-index')]
    public function index(): Response
    {
        return new Response(
            content: '<html><body>Accueil</body></html>'
        );
    }

    #[Route('/posts', 'blog_posts')]
    public function posts(): Response
    {
        return new Response(
            content: '<html lang="en"><body>Liste des articles</body></html>'
        );
    }

    #[Route('/posts/{name}/{year}', 'blog_posts_byName_byYear')]
    public function postsFromUserAndYear(string $name, int $year = 2020): Response
    {
        return new Response(
            '<html><body>'.$name.' '.$year.'</body></html>'
        );
    }
}