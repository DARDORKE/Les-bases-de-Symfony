<?php
// Dans l'exercice précédent, nous avions créé la route /posts/{user}/{year}.
// Dans cet exercice, modifiez cette route pour vous assurer que l'année est bien
// un entier sur 4 chiffres, qui est par défaut à 2022.
// Spécifiez également que toutes vos routes sont en GET.
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
//     * @Route("/", name="blog_index", methods={"GET"})
//     */
//    public function index()
//    {
//        return new Response(
//            '<html><body>Accueil</body></html>'
//        );
//    }
//
//    /**
//     * @Route("/posts", name="blog_posts", methods={"GET"})
//     */
//    public function posts()
//    {
//	      return new Response(
//            '<html><body>Liste des articles</body></html>'
//        );
//    }
//
//    /**
//     * @Route("/posts/{user}/{year}", methods={"GET"})
//     */
//    public function postsFromUserAndYear(string $user, int $year)
//    {
//	      return new Response(
//            '<html><body>'.$user.' '.$year.'</body></html>'
//        );
//    }
//}
//Vérifiez ensuite votre route sur votre serveur local en saisissant une année à deux chiffres : une erreur devrait apparaître.

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
