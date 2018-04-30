<?php

namespace App\DataFixtures;

use App\Entity\Blog;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class BlogFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $article = new Blog();
        
        $article->setImage1("blog1.jpg")
                ->setImage2("blog2.jpg") 
                ->setpdfNom("blog.pdf");
                
        $article->translate("fr")
                ->setTitre('bonjour')
                ->setArticle('je te parle !');
        
        $article->translate("en")
                ->setTitre('hello')
                ->setArticle('i\'m talking to you!');
        
        $manager->persist($article);
        $article->mergeNewTranslations();
       
        
        $manager->flush();
    }
}


