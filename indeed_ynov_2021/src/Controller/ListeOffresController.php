<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListeOffresController extends AbstractController
{
    /**
     * @Route("/", name="liste_offres")
     */
    public function index(): Response
    {
        return $this->render('liste_offres/index.html.twig', [
            'controller_name' => 'ListeOffresController',
        ]);
    }
}
