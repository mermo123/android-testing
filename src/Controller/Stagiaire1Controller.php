<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Stagiaire1Controller extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('stagiaire1/home.html.twig');
    }
    #[Route('/stagiaire', name: 'app_stagiaire1')]
    public function index(): Response
    {
        return $this->render('tp_1_stagiaire/index.html.twig', [
               'controller_name' => 'Stagiaire1Controller',
        ]);
    }
    #[Route('/ass', name: 'ass')]
    public function Ass(): Response
    {
        return $this->render('stagiaire1/ass.html.twig');
    }
}
