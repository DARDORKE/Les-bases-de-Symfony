<?php
//Nous souhaitons créer un blog dans lequel nous allons avoir plusieurs pages :
//
//https://www.monsuperbloggenial.com/ sera la page d'accueil de notre blog,
//
//https://www.monsuperbloggenial.com/posts listera tous les articles présents sur notre blog.
//
//Complétez le code du contrôleur BlogController en y ajoutant les annotations nécessaires pour réaliser ce blog.
//
//Pour vous assurer du bon fonctionnement de votre route, utilisez votre serveur local pour gérer votre
// application Symfony et rendez-vous sur les URL correspondantes (http://localhost et http://localhost/posts,
// par défaut). "Accueil" devrait apparaître sur la page d'accueil et "Liste des articles" sur la page /posts.

//<?php
//
//namespace App\Controller;
//
//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\Routing\Annotation\Route;
//use Symfony\Component\HttpFoundation\Response;
//
//class BlogController extends AbstractController
//{
//    public function index()
//    {
//        return new Response(
//            '<html><body>Accueil</body></html>'
//        );
//    }
//
//    public function posts()
//    {
//	      return new Response(
//            '<html><body>Liste des articles</body></html>'
//        );
//    }
//}

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
