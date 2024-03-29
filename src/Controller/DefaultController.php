<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/')]
class DefaultController extends AbstractController
{
    public function __construct() {
    }

    #[Route('/', name: 'homepage', methods: ['GET'])]
    public function index(): Response
    {
        return $this->redirectToRoute('project_index');
    }

}
