<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CvController extends AbstractController
{
    /**
     * @Route("/cv", name="cv")
     */
    public function index(): Response
    {
        return $this->render('cv/curriculum_vitæ.html.twig', [
            'controller_name' => 'CvController',
        ]);
    }
}
