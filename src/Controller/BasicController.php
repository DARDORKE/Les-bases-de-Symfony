<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BasicController extends AbstractController
{
    /**
     * @Route("/contactez-nous")
     */
    public function contact(): Response
    {
        return new Response('<html><body><h1>Bienvenue sur la page de contact!</h1></body></html>');
    }
}