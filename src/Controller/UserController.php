<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/EditProfile", name="Edit_Profile")
     */
    public function index(): Response
    {$user = $this->getUser();
        return $this->render('user/EditProfile.html.twig', [
            'controller_name' => 'UserController',
            'user' =>$user


        ]);
    }

    /**
     * @Route("/Profile", name="Profile")
     */
    public function indexProfile(): Response
    {   $user = $this->getUser();
        return $this->render('user/Profile.html.twig', [
            'controller_name' => 'UserController',
            'user' =>$user
        ]);
    }

    /**
     * @Route("/home/C/P", name="Discover")
     */
    public function indexDiscover_C_P(): Response
    {
        $user=$this->getUser() ;
        $repository = $this->getDoctrine()->getRepository('App:Course');
        $Courses = $repository->findAll();
        return $this->render('user/Discover_Courses/Discover.html.twig', [

            'user' =>$user
        ]);
    }

    /**
     * @Route("/home/C/L", name="Discover_Courses_Languages")
     */
    public function indexDiscover_C_L(): Response
    {
        return $this->render('user/Discover_Courses/DiscoverCL.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @Route("/home/C/M", name="Discover_Courses_Music")
     */
    public function indexDiscover_C_M(): Response
    {
        return $this->render('user/Discover_Courses/DiscoverCM.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @Route("/home/P/LP", name="Discover_LP")
     */
    public function indexDiscover_P_LP(): Response
    {
        return $this->render('user/Discover_Projects/DiscoverPLP.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @Route("/home/P/L", name="Discover_Projects_Languages")
     */
    public function indexDiscover_P_L(): Response
    {
        return $this->render('user/Discover_Projects/DiscoverPL.html.twig', [
        ]);
    }

    /**
     * @Route("/home/P/M", name="Discover_Projects_Music")
     */
    public function indexDiscover_P_M(): Response
    {
        return $this->render('user/Discover_Projects/DiscoverPM.html.twig', [
        ]);
    }

    /**
     * @Route("/MyProjets", name="MyProjects")
     */
    public function indexMyProjects(): Response
    {
        return $this->render('user/Project.html.twig', [
        ]);
    }

    /**
     * @Route("/MyCourses", name="MyCourses")
     */
    public function indexMyCourses(): Response
    {
        return $this->render('user/MyCourses.html.twig', [
        ]);
    }
}
