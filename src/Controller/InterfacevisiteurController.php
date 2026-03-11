<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class InterfacevisiteurController extends AbstractController
{
    #[Route('/interfacevisiteur', name: 'app_interfacevisiteur')]
    public function index(): Response
    {
        return $this->render('interfacevisiteur/index.html.twig', [
            'controller_name' => 'InterfacevisiteurController',
        ]);
    }
}
