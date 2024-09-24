<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TarifsMatetrielController extends AbstractController
{
    /**
     * @Route("/tarifs/matetriel", name="app_tarifs_matetriel")
     */
    public function index(): Response
    {
        return $this->render('tarifs_matetriel/index.html.twig', [
            'controller_name' => 'TarifsMatetrielController',
        ]);
    }
}
