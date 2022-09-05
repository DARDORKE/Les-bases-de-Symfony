<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index(): Response
    {
        return new Response('Hello World !');
    }

    public function contact(): Response
    {
        return new Response('Bonjour vous êtes sur la page de contact');
    }
}