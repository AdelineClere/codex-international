<?php

namespace App\DataFixtures;

use App\Entity\Esperso;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class EspersoFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $esperso1 = new Esperso();
        $esperso1
                ->setImage1("uploads/img_esperso/esperso1.jpg")
                ->setImage2("uploads/img_esperso/esperso2.jpg") 
                ->setpdfNom("uploads/pdf_esperso.esperso.pdf");
        $esperso1
                ->translate("fr")
                ->setTitre("publier article 1")
                ->setArticle('FR Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
        $esperso1
                ->translate("en")
                ->setTitre("Publish item 1")
                ->setArticle('GB Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
        
        $manager->persist($esperso1);
        $esperso1->mergeNewTranslations();
        

     
        $manager->flush();
        
    }


    
}


