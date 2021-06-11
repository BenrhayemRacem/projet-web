<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/EditProfile", name="Edit_Profile")
     */
    public function index(): Response
    {
        return $this->render('user/EditProfile.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @Route("/Profile", name="Profile")
     */
    public function indexProfile(): Response
    {
        return $this->render('user/Profile.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @Route("/home", name="Discover")
     */
    public function indexDiscover(): Response
    {
        return $this->render('user/Discover.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

}
