<?php

namespace App\Controller;

use App\Entity\Offres;
use App\Repository\ContratsRepository;
use App\Repository\TypeContratsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OffreController extends AbstractController
{
    /**
     * @Route("/{id}", name="offre")
     */
    public function index(Offres $offres, ContratsRepository $contratsRepository, TypeContratsRepository $typeContratsRepository): Response
    {
        $contrats = $contratsRepository->FindAll();
        $typeContrats = $typeContratsRepository->FindAll();

        return $this->render('offre/index.html.twig', [
            'offre' => $offres,
        ]);
    }
}
