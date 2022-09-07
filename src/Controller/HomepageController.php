
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomepageController extends AbstractController
{
    public function homepage()
    {
        return $this->render('homepage.html.twig', [
            'title' => 'MDN web docs',
            'content' => 'Des ressources pour les développeurs, par les développeurs'
        ]);
    }
}