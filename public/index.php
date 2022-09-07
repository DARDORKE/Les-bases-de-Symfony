<?php

// À partir du contrôleur ci-dessous, écrivez le contenu du fichier homepage.html.twig
// en mettant le contenu de la balise <h1> en majuscules.
// Affichez ensuite le contenu du dernier article en affichant la date au bon format.

//<?php
//
//// src/Controller/HomepageController.php
//namespace App\Controller;
//
//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//
//class HomepageController extends AbstractController
//{
//    public function homepage()
//    {
//        $lastPost = new class {
//            private string $title;
//            private \DateTime $createdAt;
//
//            public function __construct()
//            {
//                $this->title = 'Mon article';
//                $this->createdAt = new \DateTime();
//            }
//
//            public function getTitle(): string
//            {
//                return $this->title;
//            }
//
//            public function getCreatedAt(): \DateTime
//            {
//                return $this->createdAt;
//            }
//        };
//
//        return $this->render('homepage.html.twig', [
//            'title' => 'Page d\'accueil',
//            'content' => 'Ceci est le contenu de ma page d\'accueil',
//            'last_post' => $lastPost,
//        ]);
//    }
//}

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
