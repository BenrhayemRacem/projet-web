<?php

namespace App\Controller;

use App\Entity\Course;
use App\Entity\Project;
use App\Entity\User;

use App\Form\changepasswdType;
use App\Form\UserModifyType;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/Profile", name="Profile")
     */
    public function index(): Response
    {
        $user = $this->getUser();
                    return $this->render('user/Profile.html.twig', [
                        'user' => $user, ]);}

    /**
     * @Route("/EditProfile", name="Edit_Profile")
     */
    public function indexEditInfo(EntityManagerInterface $manager,UserPasswordEncoderInterface $passwordEncoder, Request $request): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(UserModifyType::class, $user);
        try {
            $form->handleRequest($request);
        } catch (\Exception $e) {
            echo "failed : " . $e->getMessage();
        }


        if ($form->isSubmitted() ) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

           $this->addFlash('success','Changes Applied');
            return $this->render('user/Profile.html.twig', [
                'user' => $user,

            ]);

        };



        return $this->render(
            'user/EditProfileInfo.html.twig', [
            'form' => $form->createView(),
            'user' => $user
        ]);
    }

    /**
     * @Route("/EditPasswd", name="Edit_Passwd")
     */
    public function indexEditPasswd(EntityManagerInterface $manager,UserPasswordEncoderInterface $passwordEncoder, Request $request): Response
    {
        $user = $this->getUser();
        $newUser = new User();
        $formPass = $this->createForm(changepasswdType::class, $newUser);

        try {
            $formPass->handleRequest($request);
        } catch (\Exception $e) {
            echo "failed : " . $e->getMessage();
        }

        if ($formPass->isSubmitted() && $formPass->isValid()) {



            if ($passwordEncoder->isPasswordValid($user , $formPass->get("oldPassword")->getData())) {

                $newpassword = $passwordEncoder->encodePassword($newUser , $formPass->get('plainPassword')->getData()) ;
                $user->setPassword($newpassword);

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                $this->addFlash('success' , "password updated successfully");
                return $this->render('user/Profile.html.twig', [
                    'formPass' => $formPass->createView(),
                    'user' => $user,

                ]);

            } else {
                $this->addFlash("error" ,"old password is wrong ");
            }


        }
        return $this->render(
            'user/EditProfilePassword.html.twig', [
            'formPass' => $formPass->createView(),
            'user' => $user
        ]);
    }










    /**
     * @Route("/home/C/P", name="Discover")
     */
    public function indexDiscover_C_P(): Response
    {
        $user=$this->getUser() ;
        return $this->render('user/Discover_Courses/Discover.html.twig', [
            'user' =>$user
        ]);
    }

    /**
     * @Route("/home/C/L", name="Discover_Courses_Languages")
     */
    public function indexDiscover_C_L(): Response
    {
        $user=$this->getUser() ;
        return $this->render('user/Discover_Courses/DiscoverCL.html.twig', [
            'user' =>$user
        ]);
    }

    /**
     * @Route("/home/C/M", name="Discover_Courses_Music")
     */
    public function indexDiscover_C_M(): Response
    {
        $user=$this->getUser() ;
        return $this->render('user/Discover_Courses/DiscoverCM.html.twig', [
            'user' =>$user
        ]);
    }

    /**
     * @Route("/home/P/LP", name="Discover_LP")
     */
    public function indexDiscover_P_LP(): Response
    {
        $user=$this->getUser() ;
        return $this->render('user/Discover_Projects/DiscoverPLP.html.twig', [
            'user' =>$user
        ]);
    }

    /**
     * @Route("/home/P/L", name="Discover_Projects_Languages")
     */
    public function indexDiscover_P_L(): Response
    {
        $user=$this->getUser() ;
        return $this->render('user/Discover_Projects/DiscoverPL.html.twig', [
            'user' =>$user
        ]);
    }

    /**
     * @Route("/home/P/M", name="Discover_Projects_Music")
     */
    public function indexDiscover_P_M(): Response
    {
        $user=$this->getUser() ;
        return $this->render('user/Discover_Projects/DiscoverPM.html.twig', [
            'user' =>$user
        ]);
    }

    /**
     * @Route("/MyProjets", name="MyProjects")
     */
    public function indexMyProjects(): Response
    {
        $user=$this->getUser() ;
        $Projects = $user->getProjects();
        return $this->render('user/Project.html.twig', [
            'user' =>$user ,
            'Projects' => $Projects
        ]);
    }

    /**
     * @Route("/RemoveMyProject/{id}", name="RemoteMyProjects")
     */
    public function indexRemoveMyProjects(Project $id,EntityManagerInterface $manager): Response
    {
        $user=$this->getUser() ;
        $user->removeProject($id);
        $manager->persist($user);
        $manager->flush();
        $this->addFlash('success','successfully left the project');
        return $this->redirectToRoute('MyProjects');
    }

    /**
     * @Route("/MyCourses", name="MyCourses")
     */
    public function indexMyCourses(): Response
    {
        $user=$this->getUser() ;
        $Courses = $user->getCourses();
        return $this->render('user/MyCourses.html.twig', [
            'user' =>$user ,
            'Courses' => $Courses
        ]);
    }

    /**
     * @Route("/RemoveMyCourse/{id}", name="RemoteMyCourses")
     */
    public function indexRemoveMyCourses(Course $id,EntityManagerInterface $manager): Response
    {
        $user=$this->getUser() ;
        $user->removeCourse($id);
        $manager->persist($user);
        $manager->flush();
        $this->addFlash('success','successfully left the course');
        return $this->redirectToRoute('MyCourses');
    }
}
