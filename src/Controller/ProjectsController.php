<?php

namespace App\Controller;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
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
     * @Route("/Addproject/{num<\d+>?0}/{ProjectName}/{Field}", name="AddProject")
     */
    public function indexAddProject(int $num , String $ProjectName , String $Field , EntityManagerInterface $manager): Response
    {
        $repository = $manager->getRepository('App:Project');
        dump($ProjectName);
        $project = $repository->findOneBy(['Name'=> $ProjectName]);
        $user = $this->getUser();
        $user->addProject($project);
        $manager->persist($user);
        $manager->flush();
        $this->addFlash('success','Joined the project successfully');
        return $this->redirectToRoute('ProjectView', ['num'=>$num,'ProjectName'=> $ProjectName , 'Field'=> $Field ]);
    }

    /**
     * @Route("/projectViewBase", name="ProjectViewBase")
     */
    public function indexproject(): Response
    {
        return $this->render('Projects/ProjectBase.html.twig');
    }


}
