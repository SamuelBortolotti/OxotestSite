<?php

namespace App\Controller;

use App\Form\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="app_contact")
     */
    public function index(Request $request): Response
    {
        $form = $this->createForm(Contact::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            // Handle the submitted data, e.g., persist it to a database
            // ...

            // Redirect or render a success message
            return $this->redirectToRoute('success_page');
        }

        return $this->render('contact/test.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/success-page", name="success_page")
     */
    public function successPage(): Response
    {
        return new Response('Form submitted successfully!');
    }
}