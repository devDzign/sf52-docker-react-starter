<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StimulusController extends AbstractController
{
    #[Route('/stimulus', name: 'stimulus')]
    public function index(): Response
    {
        return $this->render('stimulus/index.html.twig', [

        ]);
    }
}
