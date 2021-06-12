<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
;

class MailController extends AbstractController
{
    /**
     *
     * @Route("/mail/{name}", name= "mail")
     *
     * */
    public function index($name  , \Swift_Mailer $mailer)
    {
        $transport = (new \Swift_SmtpTransport('smtp.gmail.com', 465 , 'ssl'))
            ->setUsername("ltconlineschool@gmail.com")
            ->setPassword("projetweb") ;
        $mailer = new \Swift_Mailer($transport) ;

        $message = (new \Swift_Message('Welcome to our school'))
            ->setFrom("ltconlineschool@gmail.com")
            ->setTo("rassouma74@gmail.com")
            ->setBody(
                $this->renderView(
                // templates/emails/registration.html.twig
                    'mail/index.html.twig',
                    ['name' => $name]
                ),
                'text/html'
            );


     $mailer->send($message) ;


        return $this->render('mail/index.html.twig');
    }
}
