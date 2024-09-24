<?php

namespace App\Controller;

use App\Entity\FormInscription;

use App\Form\newFormInscription;
//use App\Repository\...
use App\Entity\ORMStudent;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class FormnewController extends AbstractController
{
    /**
     * @Route("/formnew", name="app_formnew")
     */


    public function index(Request $request): Response
    {
        $form = $this->createForm(newFormInscription::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            // Prends en charge les données


            // Redirection vers page de succès
            return $this->redirectToRoute('success_page');
        }

        return $this->render('formnew/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/success-page", name="success_page")
     */
    public function successPage(): Response
    {
        return new Response('Merci pour votre candidature!');
    }
}