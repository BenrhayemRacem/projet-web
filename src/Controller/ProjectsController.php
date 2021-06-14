<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectsController extends AbstractController
{
    /**
     * @Route("/projectView/{num<\d+>?0}/{ProjectName}/{Field}", name="ProjectView")
     */
    public function index(int $num , String $ProjectName , String $Field): Response
    {
        return $this->render('Projects/index'.$num.'.html.twig', ['ProjectName'=> $ProjectName , 'Field'=> $Field ]);
    }

    /**
     * @Route("/projectViewBase", name="ProjectViewBase")
     */
    public function indexproject(): Response
    {
        return $this->render('Projects/ProjectBase.html.twig');
    }


}
