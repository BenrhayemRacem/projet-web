<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $encoder ;

    /**
     * UserFixtures constructor.
     * @param UserPasswordEncoderInterface $encoder
     */
    public function __construct(UserPasswordEncoderInterface $encoder)
    { $this->encoder = $encoder;}

    public function load(ObjectManager $manager)
    {
        $student = new User();
        $student->setEmail('helalihadil4@gmail.com');
        $student->setRoles(['ROLE_USER']);
        $student->setFirstName('Hadil');
        $student->setLastName('Helali');
        $student->setIsComfirmed(1);
        $student->setPassword(
            $this->encoder->encodePassword($student, 'Hime978')
        );

        $manager->persist($student);

        $manager->flush();

        $admin = new User();
        $admin->setEmail('admin@gmail.com');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setFirstName('Hadil');
        $admin->setLastName('Helali');
        $admin->setIsComfirmed(1);
        $admin->setPassword(
            $this->encoder->encodePassword($admin, 'admin')
        );

        $manager->persist($admin);

        $manager->flush();
    }
}
