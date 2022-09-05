<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticlesController extends AbstractController
{

    public function index(): Response
    {
        return $this->render('articles.html.twig', [
            'title' => 'Tous mes articles'
        ]);
    }

}