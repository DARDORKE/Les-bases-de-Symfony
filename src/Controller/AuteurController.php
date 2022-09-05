<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class AuteurController
{
    public function index(): Response
    {
        {
            $nom = 'Kévy';
            $prenom = 'Dardor';
            $age = 28;
            return new Response("Bonjour, je suis $nom $prenom,j'ai $age ans et je suis l'auteur de ce blog!");
        }
    }
}