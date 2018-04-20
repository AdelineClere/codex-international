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
        $download->setpdf_key("stock");
        $download->setpdf_nom("uploads/download/stocksFalse.pdf");
        $manager->persist($download);
        
        $download1 = new Download();
        $download1->setpdf_key("download");
        $download1->setpdf_nom("uploads/download/xx.pdf");
        $manager->persist($download1);
        
        $download2 = new Download();
        $download2->setpdf_key("download");
        $download2->setpdf_nom("uploads/download/xx.pdf");
        $manager->persist($download2);
        $manager->flush();
    }
}
