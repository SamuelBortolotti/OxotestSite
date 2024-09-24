<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PedagogieController extends AbstractController
{
    /**
     * @Route("/pedagogie", name="app_pedagogie")
     */
    public function index(): Response
    {
        return $this->render('pedagogie/index.html.twig', [
            'controller_name' => 'PedagogieController',
        ]);
    }
}
