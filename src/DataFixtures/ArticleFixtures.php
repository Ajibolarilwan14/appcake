<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use HashContext;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $article = new Article();

        $article->setTitle('Laravel vs Symfony');
        $article->setShortDescription('This is an article that talks about how Laravel is compared to Symfony');
        $article->setDateAdded('2022-09-27 12:33:44');
        $article->setPicture('public/pictures/laravelandsymfony.png');
        $article->setUser($this->getReference('user_2'));

        $article2 = new Article();
        $article2->setTitle('Laravel vs Symfony');
        $article2->setShortDescription('This is an article that talks about how Laravel is compared to Symfony');
        $article2->setDateAdded('2022-09-27 12:33:44');
        $article2->setPicture('public/pictures/laravelandsymfony.png');
        $article2->setUser($this->getReference('user_1'));

        $article3 = new Article();
        $article3->setTitle('Nodejs vs Nextjs');
        $article3->setShortDescription('This is an article that talks about how Nodejs is compared to Nextjs');
        $article3->setDateAdded('2022-09-27 12:33:44');
        $article3->setPicture('public/pictures/laravelandsymfony.png');
        $article3->setUser($this->getReference('user_2'));

        $article4 = new Article();
        $article4->setTitle('React vs Angular');
        $article4->setShortDescription('This is an article that talks about how React is compared to Angular');
        $article4->setDateAdded('2022-09-27 12:33:44');
        $article4->setPicture('public/pictures/laravelandsymfony.png');
        $article4->setUser($this->getReference('user_3'));
        
        $manager->persist($article);
        $manager->persist($article2);
        $manager->persist($article3);
        $manager->persist($article4);

        $manager->flush();
    }
}
