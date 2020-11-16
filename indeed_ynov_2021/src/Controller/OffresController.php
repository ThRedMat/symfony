<?php

namespace App\Controller;

use App\Repository\ContratsRepository;
use App\Repository\OffresRepository;
use App\Repository\TypeContratsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OffresController extends AbstractController
{
    /**
     * @Route("/", name="offres")
     */
    public function index(OffresRepository $offresRepository, ContratsRepository $contratsRepository, TypeContratsRepository $typeContratsRepository): Response
    {
        $offres = $offresRepository->findAll();
        $contrats = $contratsRepository->FindAll();
        $typeContrats = $typeContratsRepository->FindAll();


        return $this->render('offres/index.html.twig', [
            'offres' => $offres
        ]);
    }
}
