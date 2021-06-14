<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProjectFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $project = new Project();
        $project->setName('Machine Learning Web APP');
        $project->setPath('/projectView/0/Machine%20Learning%20Web%20APP/Programming%20languages');
        $manager->persist($project);
        $manager->flush();

        $project = new Project();
        $project->setName('Create PING-PONG Game');
        $project->setPath('/projectView/1/Create%20PING-PONG%20Game/Programming%20Languages');
        $manager->persist($project);
        $manager->flush();

        $project = new Project();
        $project->setName('Write Your First Bestselling Book');
        $project->setPath('/projectView/2/Write%20Your%20First%20Bestselling%20%20Book/Languages');
        $manager->persist($project);
        $manager->flush();

        $project = new Project();
        $project->setName('Write Your First Song');
        $project->setPath('/projectView/4/Write%20Your%20First%20Song/Music');
        $manager->persist($project);
        $manager->flush();
    }
}
