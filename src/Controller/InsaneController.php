<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class InsaneController extends AbstractController
{
    #[Route('/insane', name: 'app_insane')]
    public function index(): Response
    {
        return $this->render('insane/index.html.twig', [
            'controller_name' => 'InsaneController',
        ]);
    }
}
