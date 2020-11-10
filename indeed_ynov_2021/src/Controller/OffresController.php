<?php

namespace App\Controller;

use App\Repository\OffresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OffresController extends AbstractController
{
    /**
     * @Route("/", name="offres")
     */
    public function index(OffresRepository $offresRepository): Response
    {
        $offres = $offresRepository->findAll();

        return $this->render('offres/index.html.twig', [
            'offres' => $offres,
        ]);
    }
}
