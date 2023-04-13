<?php

namespace App\Controller;

use App\Repository\AnalyseRepository;
use App\Repository\NoteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PatientController extends AbstractController
{
    #[Route('/patient', name: 'app_patient')]
    public function index(NoteRepository $noteRepository, AnalyseRepository $analyseRepository): Response
    {
        if ($this->isGranted('ROLE_PATIENT')) {

        $notes = $noteRepository->findAll(); 
        $analyses = $analyseRepository->findAll(); 
        return $this->render('prof/index.html.twig', [
            'analyses' => $analyses,
            'notes'=> $notes, 
            'user'=> $this->getUser()
        ]);
    }
    return $this->redirectToRoute('app_login');
    }
}
