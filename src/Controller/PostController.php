<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PostController extends AbstractController
{
    public function item(): Response
    {
        $post = [
            'title' => 'Fonctionnement des applications Symfony',
            'author' => 'Pierre Dupont',
        ];

        return $this->render('default/Post.html.twig', $post);
    }
}