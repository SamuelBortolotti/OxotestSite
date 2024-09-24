<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AcceuilnewController extends AbstractController
{
    /**
     * @Route("/acceuilnew", name="app_acceuilnew")
     */
    public function index(): Response
    {
        return $this->render('acceuilnew/index.html.twig', [
            'controller_name' => 'AcceuilnewController',
        ]);
    }
}
