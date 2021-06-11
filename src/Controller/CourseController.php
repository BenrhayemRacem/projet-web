<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CourseController extends AbstractController
{
    /**
     * @Route("/HTML/{num<\d+>?0}", name="HTMLCourse")
     */
    public function index(int $num): Response
    {
        return $this->render('Courses/ProgLanguage/HTML/index'.$num.'.html.twig', [
            'controller_name' => 'CourseController',
        ]);
    }
}
