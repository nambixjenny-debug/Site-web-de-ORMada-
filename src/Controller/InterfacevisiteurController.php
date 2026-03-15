<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

// final class InterfacevisiteurController extends AbstractController
// {
//     #[Route('/interfacevisiteur', name: 'app_interfacevisiteur')]
//     public function index(): Response
//     {
//         return $this->render('interfacevisiteur/index.html.twig', [
//             'controller_name' => 'InterfacevisiteurController',
//         ]);
//     }

//     #[Route('/interfacevisiteur/histoire-du-rova', name: 'app_histoire_du_rova')]
//     public function histoire(): Response
//     {
//         return $this->render('interfacevisiteur/histoiredurova.html.twig', [
//             'controller_name' => 'InterfacevisiteurController',
//         ]);
//     }
// }
final class InterfacevisiteurController extends AbstractController
{
    #[Route('/interfacevisiteur', name: 'app_interfacevisiteur')]
    public function index(): Response
    {
        return $this->render('interfacevisiteur/index.html.twig');
    }

    #[Route('/interfacevisiteur/histoiredurova', name: 'app_histoire_du_rova')]
    public function histoire(): Response
    {
        return $this->render('interfacevisiteur/histoiredurova.html.twig');
    }
}