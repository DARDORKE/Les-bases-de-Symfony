<?php
// Dans ce défi, nous allons partir d'un contrôleur partiellement rempli, que vous allez devoir compléter.

//<?php
//
//namespace App\Controller;
//
//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\Routing\Annotation\Route;
//use Symfony\Component\HttpFoundation\RedirectResponse;
//use App\Entity\User;
//
//class RoutingChallengeController extends AbstractController
//{
//    /**
//     *@Route("/send-result/{id}")
//     */
//    public function sendResult()
//    {
//        $url = '';
//
//        return new RedirectResponse($url);
//    }
//
//    /**
//     * @Route("/user-answers/{username}/{_format}")
//     */
//    public function getUserAnswers()
//    {
//    }
//
//    /**
//     * @Route("/user-answers/{username}/{id}")
//     */
//    public function getUserAnswer()
//    {
//    }
//}
//Les consignes sont les suivantes :
//
//Toutes les routes de ce contrôleur doivent commencer par /challenge.
//
//Vous devez vous assurer que le slug {id} de la route de l'action sendResult()soit un entier positif.
//
//L'action sendResult() ne doit être accessible qu'en POST.
//
// Complétez le code de l'action sendResult() afin de rediriger l'utilisateur vers la route correspondante à l'action getUserAnswers() de l'utilisateur "John".
//
// L'action getUserAnswers() ne doit être accessible qu'en GET.
//
// Vous devez vous assurer que le slug {_format} ne puisse avoir comme valeur que "html" ou "json".
//
// L'action getUserAnswer(), quant à elle, permet de n'avoir qu'une seule des réponses de
// l'utilisateur, en la choisissant par son ID. Rendez le slug {id} facultatif.

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
