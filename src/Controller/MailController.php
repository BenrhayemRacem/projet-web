<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Repository\UserRepository;

;

class MailController extends AbstractController
{

    /**
     *
     * @Route("/mail/{name}/{mail}/{uniqueId}", name= "mail")
     *
     * */


    public function index($name, $mail, $uniqueId)
    {
        $transport = (new \Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
            ->setUsername("ltconlineschool@gmail.com")
            ->setPassword("projetweb") ;
        $mailer = new \Swift_Mailer($transport) ;

        $message = (new \Swift_Message('Welcome to our school'))
            ->setFrom("ltconlineschool@gmail.com")
            ->addTo($mail)
            ->setBody(
                $this->renderView(
                // templates/emails/registration.html.twig
                    'mail/index.html.twig',
                    ['name' => $name , 'uniqueId' => $uniqueId , 'mail' => $mail]
                ),
                'text/html'
            );


        $mailer->send($message) ;

        return $this->render('emailVerification/GoCheckEmail.html.twig') ;
    }

    /**
     *
     * @Route("/mail/{mail}/{uniqueId}", name= "mail.verif")
     *
     * */
    public function verificationEmail($mail, $uniqueId, UserRepository  $repository)
    {
        $user = $repository->findOneBy(array('email' => $mail)) ;

        if ($user) {
            if ($repository->verifyCredentials($mail, $uniqueId)) {
                $user->setIsComfirmed(1) ;
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                return $this->render('emailVerification/GoAccountConfirmed.html.twig');
            }
        }

        return  $this->render('emailVerification/GoCheckCredentials.html.twig') ;
    }

    /**
     * @Route("/forgetPasswdEmail/{mail}/{newPasswd}" , name="emailForgetPasswd")
     */

    public function envoyerEmail($mail , $newPasswd) {

        $transport = (new \Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
            ->setUsername("ltconlineschool@gmail.com")
            ->setPassword("projetweb") ;
        $mailer = new \Swift_Mailer($transport) ;

        $message = (new \Swift_Message('Password changed successfully'))
            ->setFrom("ltconlineschool@gmail.com")
            ->addTo($mail)
            ->setBody(
                $this->renderView(
                // templates/emails/registration.html.twig
                    'mail/passwdChanged.html.twig',
                    ['passwd'=>$newPasswd ]
                ),
                'text/html'
            );


        $mailer->send($message) ;

        return $this->render('home.html.twig') ;
    }


}
