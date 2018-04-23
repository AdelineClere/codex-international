<?php

namespace App\DataFixtures;

use App\Entity\Download;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class DownloadFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $download = new Download();
        $download   
                ->setPdfKey("stock")
                ->setPdfNom("uploads/download/stocksFalse.pdf")
                ->translate("fr")
                ->setSujet("Bonjour")
                ->setDescription("Bonjour je suis une description");
        $download
                ->translate("en")
                ->setSujet("Hello")
                ->setDescription("Hi ! i\'am a description");   
        $manager->persist($download);
        $download->mergeNewTranslations();
        
        $download1 = new Download();
        $download1   
                ->setPdfKey("download")
                ->setPdfNom("uploads/xx")
                ->translate("fr")
                ->setSujet("Jambon")
                ->setDescription("Bonjour je suis une description");
        $download1
                ->translate("en")
                ->setSujet("Ham")
                ->setDescription("Hi ! i\'am a description");   
        $manager->persist($download1);
        $download1->mergeNewTranslations();
        
        $download2 = new Download();
        $download2   
                ->setPdfKey("download")
                ->setPdfNom("uploads/xx")
                ->translate("fr")
                ->setSujet("poulpe")
                ->setDescription("Bonjour je suis une description");
        $download2
                ->translate("en")
                ->setSujet("Octopus")
                ->setDescription("Hi ! i\'am a description");   
        $manager->persist($download2);
        $download2->mergeNewTranslations();
        
        $manager->flush();
    }
}
