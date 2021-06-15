<?php

namespace App\DataFixtures;

use App\Entity\Course;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CourseFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $course = new Course();
        $course->setName('HTML');
        $course->setPath('HTMLCourse');
        $manager->persist($course);
        $manager->flush();

        $course = new Course();
        $course->setName('CSS');
        $course->setPath('CSSCourse');
        $manager->persist($course);
        $manager->flush();

        $course = new Course();
        $course->setName('Javascript');
        $course->setPath('JSCourse');
        $manager->persist($course);
        $manager->flush();

        $course = new Course();
        $course->setName('français');
        $course->setPath('francais');
        $manager->persist($course);
        $manager->flush();

        $course = new Course();
        $course->setName('anglais');
        $course->setPath('anglais');
        $manager->persist($course);
        $manager->flush();
    }
}
