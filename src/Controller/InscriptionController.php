<?php

namespace App\Controller;


use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class InscriptionController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */

    public function index(EntityManagerInterface $entityManager ,Request $request , User $user=null ,UserPasswordEncoderInterface $passwordEncoder): Response
    {
        // 1) build the form
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
            /*dd($form->isSubmitted());*/
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            // 4) save the User!
            dd($user);
            $entityManager->persist($user);
            $entityManager->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->render('Connected.html.twig', [
                'user' => $user
            ]);
          //  return $this->forward('App\Controller\homeController::home',['user'=>$user]);
        } else {
            return $this->render('inscription/index.html.twig', [
            'form' => $form->createView()
        ]);}


    }
}
