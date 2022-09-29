<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setName('Adebayo Ajibola');
        $user->setEmailAddress('jibbol001@yahoo.com');
        $user->setPassword('Password@12345!');

        $user2 = new User();
        $user2->setName('Adebayo Olaide');
        $user2->setEmailAddress('jibbol001@yahoo.com');
        $user2->setPassword('Password@12345!');

        $user3 = new User();
        $user3->setName('Adebayo Rilwan');
        $user3->setEmailAddress('jibbol001@yahoo.com');
        $user3->setPassword('Password@12345!');

        $manager->persist($user);
        $manager->persist($user2);
        $manager->persist($user3);

        $manager->flush();
        
        $this->addReference('user_1', $user);
        $this->addReference('user_2', $user2);
        $this->addReference('user_3', $user3);

    }
}
