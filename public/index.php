<?php
// Sur notre blog, nous souhaiterions également afficher les articles qu'un utilisateur particulier
// a écrit une certaine année.
//
// Par exemple, la page https://www.monsuperbloggenial.com/posts/john/2015 devra afficher
// tous les articles que John a écrit en 2015, alors que
// la page https://www.monsuperbloggenial.com/posts/emilie/2012 affichera tous les articles
// d'Émilie datant de 2012.
//
// Complétez le BlogController avec cette nouvelle route et créez l'action
// postsFromUserAndYear associée. La méthode pourra simplement afficher le nom et la date rentrée.
//
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
//    /**
//     * @Route("/", name="blog_index")
//     */
//    public function index()
//    {
//        return new Response(
//            '<html><body>Accueil</body></html>'
//        );
//    }
//
//    /**
//     * @Route("/posts", name="blog_posts")
//     */
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
