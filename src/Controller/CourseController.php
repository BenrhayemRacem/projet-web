<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CourseController extends AbstractController
{
    /**
     * @Route("/HTML/result", name="HTMLQuiz")
     */
    public function indexHTMLQuiz(): Response
    {
        $score = 0 ;
        $question1 = $_GET['question1'] ;
        $question2 = $_GET['question2'] ;
        $question3 = $_GET['question3'] ;
        $question4 = $_GET['question4'] ;
        $question5 = $_GET['question5'] ;
        if ($question1 == 'option3') $score++ ;
        if ($question2 == 'option1') $score++ ;
        if ($question3 == 'option3') $score++ ;
        if ($question4 == 'option2') $score++ ;
        if ($question5 == 'option3') $score++ ;

        $moyenne= "votre score est {$score}/5   et";
        $pourcentage = ($score *20) ;

        $this->addFlash('result', $moyenne.' votre resultat est '.$pourcentage.'%');

        return $this->render('Courses/ProgLanguage/HTML/index7.html.twig', []);
    }

    /**
     * @Route("/HTML/{num<\d+>?0}", name="HTMLCourse")
     */
    public function indexHTML(int $num): Response
    {
        return $this->render('Courses/ProgLanguage/HTML/index'.$num.'.html.twig', []);
    }

    /**
     * @Route("/CSS/result", name="CSSQuiz")
     */
    public function indexCSSQuiz(): Response
    {
        $score = 0 ;
        $question1 = $_GET['question1'] ;
        $question2 = $_GET['question2'] ;
        $question3 = $_GET['question3'] ;
        $question4 = $_GET['question4'] ;
        $question5 = $_GET['question5'] ;
        if ($question1== 'option3') $score++ ;
        if ($question2== 'option2') $score++ ;
        if ($question3== 'option3') $score++ ;
        if ($question4== 'option1') $score++ ;
        if ($question5== 'option2') $score++ ;


        $moyenne= "votre score est {$score}/5   et";
        $pourcentage = ($score *20) ;

        $this->addFlash('result', $moyenne.' votre resultat est '.$pourcentage.'%');

        return $this->render('Courses/ProgLanguage/CSS/index10.html.twig', []);
    }

    /**
     * @Route("/CSS/{num<\d+>?0}", name="CSSCourse")
     */
    public function indexCSS(int $num): Response
    {
        return $this->render('Courses/ProgLanguage/CSS/index'.$num.'.html.twig', []);
    }

    /**
     * @Route("/JS/result", name="JAVASCIPTQuiz")
     */
    public function indexJSQuiz(): Response
    {
        $score = 0 ;
        $question1 = $_GET['question1'] ;
        $question2 = $_GET['question2'] ;
        $question3 = $_GET['question3'] ;
        $question4 = $_GET['question4'] ;
        $question5 = $_GET['question5'] ;
        if ($question1== 'option1') $score++ ;
        if ($question2== 'option3') $score++ ;
        if ($question3== 'option3') $score++ ;
        if ($question4== 'option2') $score++ ;
        if ($question5== 'option3') $score++ ;


        $moyenne= "votre score est {$score}/5   et";
        $pourcentage = ($score *20) ;

        $this->addFlash('result', $moyenne.' votre resultat est '.$pourcentage.'%');

        return $this->render('Courses/ProgLanguage/JS/index11.html.twig', []);
    }

    /**
     * @Route("/JS/{num<\d+>?0}", name="JAVASCIPTCourse")
     */
    public function indexJS(int $num): Response
    {
        return $this->render('Courses/ProgLanguage/JS/index'.$num.'.html.twig', []);
    }

    /**
     * @Route("/Cpp/{num<\d+>?0}", name="C++Course")
     */
    public function indexCpp(int $num): Response
    {
        return $this->render('home.html.twig', []);
    }
    /**
     * @Route("/SQL/{num<\d+>?0}", name="SQLCourse")
     */
    public function indexSQL(int $num): Response
    {
        return $this->render('home.html.twig', []);
    }

    /**
     * @Route("/JAVA/{num<\d+>?0}", name="JAVACourse")
     */
    public function indexJava(int $num): Response
    {
        return $this->render('home.html.twig', []);
    }
    /**
     * @Route("/francais/result", name="francaisQuiz")
     */
    public function indexfrancaisQuiz(): Response
    {
        $score = 0 ;
        $question1 = $_GET['question1'] ;
        $question2 = $_GET['question2'] ;
        $question3 = $_GET['question3'] ;
        $question4 = $_GET['question4'] ;
        $question5 = $_GET['question5'] ;
        if ($question1== 'option2') $score++ ;
        if ($question2== 'option3') $score++ ;
        if ($question3== 'option1') $score++ ;
        if ($question4== 'option2') $score++ ;
        if ($question5== 'option2') $score++ ;


        $moyenne= "votre score est {$score}/5   et";
        $pourcentage = ($score *20) ;

        $this->addFlash('result', $moyenne.' votre resultat est '.$pourcentage.'%');

        return $this->render('Courses/writing/francais/index8.html.twig', []);
    }

    /**
     * @Route("/francais/{num<\d+>?0}", name="francaisCourse")
     */
    public function indexfrancais(int $num): Response
    {
        return $this->render('Courses/writing/francais/index'.$num.'.html.twig', []);
    }

    /**
     * @Route("/anglais/result", name="anglaisQuiz")
     */
    public function indexanglaisQuiz(): Response
    {
        $score = 0 ;
        $question1 = $_GET['question1'] ;
        $question2 = $_GET['question2'] ;
        $question3 = $_GET['question3'] ;
        $question4 = $_GET['question4'] ;
        $question5 = $_GET['question5'] ;
        if ($question1== 'option1') $score++ ;
        if ($question2== 'option2') $score++ ;
        if ($question3== 'option2') $score++ ;
        if ($question4== 'option2') $score++ ;
        if ($question5== 'option1') $score++ ;


        $moyenne= "votre score est {$score}/5   et";
        $pourcentage = ($score *20) ;

        $this->addFlash('result', $moyenne.' votre resultat est '.$pourcentage.'%');

        return $this->render('Courses/writing/anglais/index8.html.twig', []);
    }

    /**
     * @Route("/anglais/{num<\d+>?0}", name="anglaisCourse")
     */
    public function indexanglais(int $num): Response
    {
        return $this->render('Courses/writing/anglais/index'.$num.'.html.twig', []);
    }


}