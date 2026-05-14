<?php

namespace App\Controller\visiteurs;

use App\Entity\Actualite;
use App\Form\ActualiteType;
use App\Repository\ActualiteRepository;
use App\Entity\Media;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ShowActualiteController extends AbstractController
{   
    #[Route('/{id}', name: 'app_showActualite', methods: ['GET'])]
    public function app_showActualite(Actualite $actualite): Response
    {
        return $this->render('interfacevisiteur/ShowActualite.html.twig', [
            'actualiteShow' => $actualite,
        ]);
    }
}