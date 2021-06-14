<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\changepasswdType;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Uid\Uuid;

class ChangepasswController extends AbstractController
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    /**
     * @Route("/changePasswd", name="ChangePasswd")
     */
    public function index(EntityManagerInterface $manager, UserPasswordEncoderInterface $passwordEncoder, Request $request)
    {
        $user = $this->getUser();


        $newUser = $this->getUser() ;
        $form = $this->createForm(changepasswdType::class, $newUser);
        try {
            $form->handleRequest($request);
        } catch (\Exception $e) {
            echo "failed : ".$e->getMessage();
        }


        if ($form->isSubmitted() && $form->isValid()) {
            if ($user) {
                $password = $passwordEncoder->encodePassword($newUser, $newUser->getPlainPassword()) ;
                if ($password == $user->getPassword()) {
                    $user->setPassword($password);

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($user);
                    $em->flush();

                    return $this->render('user/EditProfile.html.twig', [
                        'form' => $form->createView(),

                    ]);
                }
            }
        }
        return $this->render('user/EditProfile.html.twig', [
            'form' => $form->createView(),
            'message' => 'password updated succesfully '
        ]);
    }
}
