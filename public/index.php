<?php
// Modifiez le contrôleur suivant pour faire appel à un template Twig que vous écrirez
// en reprenant le code HTML présent dans le code.
// <?php
//
// # src/Controller/PostController.php
// namespace App\Controller;
//
// use Symfony\Component\HttpFoundation\Response;
//
// class PostController
// {
//    public function item(): Response
//    {
//        $post = [
//            'title' => 'Fonctionnement des applications Symfony',
//            'author' => 'Pierre Dupont',
//        ];
//
//        return new Response('<h1>'.$post['title'].'</h1><p>Écrit par '.$post['author'].'.</p>');
//    }
// }
// Puisqu'il s'agit d'une nouvelle méthode, n'oubliez pas d'ajouter la route suivante :
//
// # config/routes.yaml
//
// post_item:
//    path: /article/fonctionnement-des-applications-symfony
//    controller: App\Controller\PostController::item

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
