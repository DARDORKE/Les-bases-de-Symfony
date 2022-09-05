<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function index(): Response
    {
        return new Response('Hello World !');
    }

    public function contact(): Response
    {
        return $this->render('default/contact.html.twig', [
            'name' => 'Kévy',
        ]);
    }
}