<?php

namespace App\Controller;

use App\Entity\Offres;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OffreController extends AbstractController
{
    /**
     * @Route("/{id}", name="offre")
     */
    public function index(Offres $offres): Response
    {
        return $this->render('offre/index.html.twig', [
            'offre' => $offres,
        ]);
    }
}
