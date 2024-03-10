<?php

namespace App\Controller;

use App\Repository\ProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/project')]
class ProjectController extends AbstractController
{
    public function __construct(
        private readonly ProjectRepository $projectRepository
    ) {
    }

    #[Route('/', name: 'project_index', methods: ['GET'])]
    public function index(): Response
    {
        $projects = $this->projectRepository->findAll();

        return $this->render('project/index.html.twig', [
            'projects' => $projects,
        ]);
    }

}
