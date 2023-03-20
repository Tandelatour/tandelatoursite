<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'main_accueil')]
    public function accueil(): Response
    {
        return $this->render('main/accueil.html.twig', [
            ]);
    }

    #[Route('/cv', name: 'main_cv')]
    public function cv(): Response
    {
        return $this->render('main/cv.html.twig', [

        ]);
    }

    #[Route('/contact', name: 'main_contact')]
    public function contact(): Response
    {
        return $this->render('main/contact.html.twig', [

        ]);
    }




}
