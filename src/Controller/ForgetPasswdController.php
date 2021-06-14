<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ForgetPasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Uid\Uuid;

class ForgetPasswdController extends AbstractController
{
    /**
     *
     * @Route("/forget" , name="forget")
     *
     *
     */
    public function index(EntityManagerInterface $manager,UserPasswordEncoderInterface $passwordEncoder, Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(ForgetPasswordType::class, $user);
        try {
            $form->handleRequest($request);
        } catch (\Exception $e) {
            echo "failed : ".$e->getMessage();
        }

        if($form->isSubmitted()) {
            $repository = $this->getDoctrine()->getRepository(User::class);
            $userActual = $repository->findOneBy(array('email' => $user->getUsername())) ;
          if  (  $userActual) {
            $newPasswd = Uuid::v4();

            $userActual->setPassword($passwordEncoder->encodePassword($userActual, $newPasswd)) ;
              $em = $this->getDoctrine()->getManager();
              $em->persist($userActual);
              $em->flush();
              return $this->redirectToRoute('emailForgetPasswd' , array(
                  "mail" => $userActual->getUsername(),
                  "newPasswd"=> $newPasswd
              )) ;
          } else {
              echo 'ghaleeeeeeeeeeeeeet' ;
          };

        }
        return $this->render('forget_passwd/index.html.twig', [
            'controller_name' => 'ForgetPasswdController',
            'form' => $form->createView()
        ]);
    }
}
