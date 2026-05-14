<?php

namespace App\Controller\visiteurs;

use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\EvenementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Media;

final class ShowEvenementController extends AbstractController
{   
  #[Route('/visiteurs/{id}', name: 'app_showevenement', methods: ['GET'])]
    public function ShowEvenement(Evenement $evenement): Response
    {
        return $this->render('interfacevisiteur/ShowEvenement.html.twig', [
            'evenement' => $evenement,
        ]);
    }
}