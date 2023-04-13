<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnalyseController extends AbstractController
{
    #[Route('/matiere', name: 'app_matiere')]
    public function index(): Response
    {
        return $this->render('analyse/index.html.twig', [
            'controller_name' => 'AnalyseController',
        ]);
    }
}
