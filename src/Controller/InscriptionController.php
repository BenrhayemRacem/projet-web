<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Uid\Uuid;


class InscriptionController extends AbstractController
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    /**
     * @Route("/registration", name="registration")
     */
    public function index(UserPasswordEncoderInterface $passwordEncoder , Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        try {
            $form->handleRequest($request);
        } catch (\Exception $e) {
            echo "failed : ".$e->getMessage();
        }


        if ($form->isSubmitted() && $form->isValid() ) {


            $password = $passwordEncoder->encodePassword($user , $user->getPlainPassword()) ;


            $user->setPassword($password);

            // Set their role

            $user->setIsComfirmed(0) ;
            $uid = Uuid::v4() ;
            $user->setUniqueId($uid) ;
            // Save
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();


            return $this->redirectToRoute("mail" , [
                'name' => $user->getFirstName(),
                'mail' => $user->getUsername() ,
                'uniqueId' => $user->getUniqueId()
            ] );
        }

        return $this->render('inscription/index.html.twig', [
            'form' => $form->createView(),
        ]);


    }




}


