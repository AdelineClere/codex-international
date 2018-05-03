<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ProduitFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
    /*    $product1 = new \App\Entity\Produit();
        $product1
                ->setNom("Métaux Purs")
                ->setCategory("cible de pulvérisation")
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr");
        $product1
                ->translate("en")
                ->setNom("Pur Metals")
                ->setCategory("sputtering target")
                ->setpdf("uploads/oxyde.jpg");     
        $manager->persist($product1);       
        $product1->mergeNewTranslations();
        $manager->flush();
        
        $product2 = new \App\Entity\Produit();
        $product2
                ->setNom("Antimonides")
                ->setCategory("cible de pulvérisation")
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr");
        $product2
                ->translate("en")
                ->setNom("Antimonides")
                ->setCategory("sputtering target")
                ->setpdf("uploads/oxyde.jpg");
        $manager->persist($product2);       
        $product2->mergeNewTranslations();
        $manager->flush();
        
        $product3 = new \App\Entity\Produit();
        $product3
                ->setNom("Arsenides")
                ->setCategory("cible de pulvérisation")
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr");
        $product3
                ->translate("en")
                ->setNom("Arsenides")
                ->setCategory("sputtering target")
                ->setpdf("uploads/oxyde.jpg");
        $manager->persist($product);       
        $product3->mergeNewTranslations();
        $manager->flush();
        
        $product4 = new \App\Entity\Produit();
        $product4
                ->setNom("Borides")
                ->setCategory("cible de pulvérisation")
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr");
        $product4
                ->translate("en")
                ->setNom("Borides")
                ->setCategory("sputtering target")
                ->setpdf("uploads/oxyde.jpg");
        $manager->persist($product4);       
        $product4->mergeNewTranslations();
        $manager->flush();
        
        $product5 = new \App\Entity\Produit();
        $product5
                ->setNom("Carbides")
                ->setCategory("cible de pulvérisation")
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr");
        $product5
                ->translate("en")
                ->setNom("Carbides")
                ->setCategory("sputtering target")
                ->setpdf("uploads/oxyde.jpg");             
        $manager->persist($product5);       
        $product5->mergeNewTranslations();
        $manager->flush();
       
        $product6 = new \App\Entity\Produit();
        $product6
                ->setNom("Fluorides")
                ->setCategory("cible de pulvérisation")
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr");
        $product6
                ->translate("en")
                ->setNom("Fluorides")
                ->setCategory("sputtering target")
                ->setpdf("uploads/oxyde.jpg");
        $manager->persist($product6);       
        $product6->mergeNewTranslations();
        $manager->flush();
        
        $product7 = new \App\Entity\Produit();
        $product7
                ->setNom("Nitrides")
                ->setCategory("cible de pulvérisation")
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr");  
        $product7
                ->translate("en")
                ->setNom("Nitrides")
                ->setCategory("sputtering target")
                ->setpdf("uploads/oxyde.jpg");
        $manager->persist($product7);       
        $product7->mergeNewTranslations();
        $manager->flush();
        
        $product8 = new \App\Entity\Produit();
        $product8
                ->setNom("Oxydes")
                ->setCategory("cible de pulvérisation")
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr");  
        $product8
                ->translate("en")
                ->setNom("Oxydes")
                ->setCategory("sputtering target")
                ->setpdf("uploads/oxyde.jpg");
        $manager->persist($product8);       
        $product8->mergeNewTranslations();
        $manager->flush();
        
        $product9 = new \App\Entity\Produit();
        $product9
                ->setNom("Sélénides")
                ->setCategory("cible de pulvérisation")
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr");  
        $product9
                ->translate("en")
                ->setNom("Sélénides")
                ->setCategory("uploads/xxx.pdf")
                ->setpdf("uploads/oxyde.jpg");
        $manager->persist($product9);       
        $product9->mergeNewTranslations();
        $manager->flush();
        
        $product10 = new \App\Entity\Produit();
        $product10
                ->setNom("Silicides")
                ->setCategory("cible de pulvérisation")
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr");  
        $product10
                ->translate("en")
                ->setNom("Silicides")
                ->setCategory("sputtering target")
                ->setpdf("uploads/oxyde.jpg");
        $manager->persist($product10);       
        $product10->mergeNewTranslations();
        $manager->flush();

        $product11 = new \App\Entity\Produit();
        $product11
                ->setNom("Sulfides")
                ->setCategory("cible de pulvérisation")
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr");  
        $product11
                ->translate("en")
                ->setNom("Sulfides")
                ->setCategory("sputtering target")
                ->setpdf("uploads/oxyde.jpg");
        $manager->persist($product11);       
        $product11->mergeNewTranslations();
        $manager->flush();

        $product12 = new \App\Entity\Produit();
        $product12
                ->setNom("Tellurides")
                ->setCategory("cible de pulvérisation")
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr");  
        $product12
                ->translate("en")
                ->setNom("Tellurides")
                ->setCategory("sputtering target")
                ->setpdf("uploads/oxyde.jpg");
        $manager->persist($product12);       
        $product12->mergeNewTranslations();
        $manager->flush();

        
        
        $product13 = new \App\Entity\Produit();
        $product13
                ->setNom("Métaux Purs")
                ->setCategory("materiaux d'évaporation")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product13
                ->translate("en")
                ->setNom("Pur Metals")
                ->setCategory("evaporation material")
                ->setpdf("uploads/");
        $manager->persist($product13);       
        $product13->mergeNewTranslations();
        $manager->flush();
                
        $product14 = new \App\Entity\Produit();
        $product14
                ->setNom("Alliages et Céramiques")
                ->setCategory("materiaux d'évaporation")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product14
                ->translate("en")
                ->setNom("Alloys & Ceramic")
                ->setCategory("evaporation material")
                ->setpdf("uploads/");
        $manager->persist($product14);       
        $product14->mergeNewTranslations();
        $manager->flush();
                
        $product15 = new \App\Entity\Produit();
        $product15
                ->setNom("Antimonides")
                ->setCategory("materiaux d'évaporation")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product15
                ->translate("en")
                ->setNom("Antimonides")
                ->setCategory("evaporation material")
                ->setpdf("uploads/");
        $manager->persist($product15);       
        $product15->mergeNewTranslations();
        $manager->flush();
                
        $product16 = new \App\Entity\Produit();
        $product16
                ->setNom("Arsenides")
                ->setCategory("materiaux d'évaporation")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product16
                ->translate("en")
                ->setNom("Arsenides")
                ->setCategory("evaporation material")
                ->setpdf("uploads/");
        $manager->persist($product16);       
        $product16->mergeNewTranslations();
        $manager->flush();
                
        $product17 = new \App\Entity\Produit();
        $product17
                ->setNom("Borides")
                ->setCategory("materiaux d'évaporation")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product17
                ->translate("en")
                ->setNom("Borides")
                ->setCategory("evaporation material")
                ->setpdf("uploads/");
        $manager->persist($product17);       
        $product17->mergeNewTranslations();
        $manager->flush();
                
        $product18 = new \App\Entity\Produit();
        $product18
                ->setNom("Carbides")
                ->setCategory("materiaux d'évaporation")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product18
                ->translate("en")
                ->setNom("Carbides")
                ->setCategory("")
                ->setpdf("uploads/");
        $manager->persist($product18);       
        $product18->mergeNewTranslations();
        $manager->flush();
                
        $product19 = new \App\Entity\Produit();
        $product19
                ->setNom("Fluorides")
                ->setCategory("materiaux d'évaporation")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product19
                ->translate("en")
                ->setNom("Fluorides")
                ->setCategory("evaporation material")
                ->setpdf("uploads/");
        $manager->persist($product19);       
        $product19->mergeNewTranslations();
        $manager->flush();
                
        $product20 = new \App\Entity\Produit();
        $product20
                ->setNom("Nitrides")
                ->setCategory("materiaux d'évaporation")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product20
                ->translate("en")
                ->setNom("Nitrides")
                ->setCategory("evaporation material")
                ->setpdf("uploads/");
        $manager->persist($product20);       
        $product20->mergeNewTranslations();
        $manager->flush();
                
        $product21 = new \App\Entity\Produit();
        $product21
                ->setNom("Oxydes")
                ->setCategory("materiaux d'évaporation")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product21
                ->translate("en")
                ->setNom("Oxydes")
                ->setCategory("evaporation material")
                ->setpdf("uploads/");
        $manager->persist($product21);       
        $product21->mergeNewTranslations();
        $manager->flush();
                
        $product22 = new \App\Entity\Produit();
        $product22
                ->setNom("Sélénides")
                ->setCategory("materiaux d'évaporation")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product22
                ->translate("en")
                ->setNom("Sélénides")
                ->setCategory("evaporation material")
                ->setpdf("uploads/");
        $manager->persist($product22);       
        $product22->mergeNewTranslations();
        $manager->flush();
                
        $product23 = new \App\Entity\Produit();
        $product23
                ->setNom("Silicides")
                ->setCategory("materiaux d'évaporation")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product23
                ->translate("en")
                ->setNom("Silicides")
                ->setCategory("evaporation material")
                ->setpdf("uploads/");
        $manager->persist($product23);       
        $product23->mergeNewTranslations();
        $manager->flush();
                
        $product24 = new \App\Entity\Produit();
        $product24
                ->setNom("Sulfides")
                ->setCategory("materiaux d'évaporation")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product24
                ->translate("en")
                ->setNom("Sulfides")
                ->setCategory("")
                ->setpdf("uploads/");
        $manager->persist($product24);       
        $product24->mergeNewTranslations();
        $manager->flush();
                
        $product25 = new \App\Entity\Produit();
        $product25
                ->setNom("Tellurides")
                ->setCategory("materiaux d'évaporation")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product25
                ->translate("en")
                ->setNom("Tellurides")
                ->setCategory("evaporation material")
                ->setpdf("uploads/");
        $manager->persist($product25);       
        $product25->mergeNewTranslations();
        $manager->flush();
          
           
        
        $product26 = new \App\Entity\Produit();
        $product26
                ->setNom("Fils, Feuilles, Plaques")
                ->setCategory("fils, feuilles, plaques")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product26
                ->translate("en")
                ->setNom("Wires Foils Plates")
                ->setCategory("wires foils plates")
                ->setpdf("uploads/");
        $manager->persist($product26);       
        $product26->mergeNewTranslations();
        $manager->flush();
       
        
        $product27 = new \App\Entity\Produit();
        $product27
                ->setNom("Métaux précieux")
                ->setCategory("métaux précieux")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product27
                ->translate("en")
                ->setNom("Precious metal")
                ->setCategory("precious metal")
                ->setpdf("uploads/");
        $manager->persist($product27);       
        $product27->mergeNewTranslations();
        $manager->flush();
       
        $product28 = new \App\Entity\Produit();
        $product28
                ->setNom("Recyclage des cibles")
                ->setCategory("métaux précieux")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product28
                ->translate("en")
                ->setNom("Target recycling")
                ->setCategory("precious metal")
                ->setpdf("uploads/");
        $manager->persist($product28);       
        $product28->mergeNewTranslations();
        $manager->flush();
       
        
        
        $product29 = new \App\Entity\Produit();
        $product29
                ->setNom("Substrats Si")
                ->setCategory("substrats")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product29
                ->translate("en")
                ->setNom("Si Wafers")
                ->setCategory("wafer")
                ->setpdf("uploads/");
        $manager->persist($product29);       
        $product29->mergeNewTranslations();
        $manager->flush();
       
        $product30 = new \App\Entity\Produit();
        $product30
                ->setNom("Substrats Monocristallin")
                ->setCategory("substrats")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product30
                ->translate("en")
                ->setNom("Single Crystal wafers")
                ->setCategory("Si Wafers")
                ->setpdf("uploads/");
        $manager->persist($product30);       
        $product30->mergeNewTranslations();
        $manager->flush();
       
        
        
        $product31 = new \App\Entity\Produit();
        $product31
                ->setNom("Montage de cible")
                ->setCategory("services")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product31
                ->translate("en")
                ->setNom("Bonding service")
                ->setCategory("services")
                ->setpdf("uploads/");
        $manager->persist($product31);       
        $product31->mergeNewTranslations();
        $manager->flush();
       
        $product32 = new \App\Entity\Produit();
        $product32
                ->setNom("Dépots à façon et découpe")
                ->setCategory("services")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product32
                ->translate("en")
                ->setNom("Coating Service and Dicing")
                ->setCategory("")
                ->setpdf("uploads/");
        $manager->persist($product32);       
        $product32->mergeNewTranslations();
        $manager->flush();
       
        $product33 = new \App\Entity\Produit();
        $product33
                ->setNom("Nitruration")
                ->setCategory("services")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product33
                ->translate("en")
                ->setNom("Nitruration")
                ->setCategory("")
                ->setpdf("uploads/");
        $manager->persist($product33);       
        $product33->mergeNewTranslations();
        $manager->flush();
       
        $product34 = new \App\Entity\Produit();
        $product34
                ->setNom("Oxydation thermique")
                ->setCategory("services")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product34
                ->translate("en")
                ->setNom("Thermal oxidation")
                ->setCategory("services")
                ->setpdf("uploads/");
        $manager->persist($product34);       
        $product34->mergeNewTranslations();
        $manager->flush();
       
        $product35 = new \App\Entity\Produit();
        $product35
                ->setNom("Découpe de substrats Si")
                ->setCategory("services")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product35
                ->translate("en")
                ->setNom("Si wafers Dicing")
                ->setCategory("services")
                ->setpdf("uploads/");
        $manager->persist($product35);       
        $product35->mergeNewTranslations();
        $manager->flush();

        $product36 = new \App\Entity\Produit();
        $product36
                ->setNom("Certificats d'analyse")
                ->setCategory("services")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product36
                ->translate("en")
                ->setNom("Analytical services & Quality")
                ->setCategory("services")
                ->setpdf("uploads/");
        $manager->persist($product36);       
        $product36->mergeNewTranslations();
        $manager->flush();
       
        $product37 = new \App\Entity\Produit();
        $product37
                ->setNom("Recyclage des cibles")
                ->setCategory("services")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product37
                ->translate("en")
                ->setNom("Target recycling ")
                ->setCategory("services")
                ->setpdf("uploads/");
        $manager->persist($product37);       
        $product37->mergeNewTranslations();
        $manager->flush();
       
        
        
        $product38 = new \App\Entity\Produit();
        $product38
                ->setNom("Pompe à vide")
                ->setCategory("Pompe à vide")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product38
                ->translate("en")
                ->setNom("Vacuum pomp")
                ->setCategory("Vacuum pomp")
                ->setpdf("uploads/");
        $manager->persist($product38);       
        $product38->mergeNewTranslations();
        $manager->flush();
       
        
        
        $product39 = new \App\Entity\Produit();
        $product39
                ->setNom("Filaments et Nacelles")
                ->setCategory("couches minces")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product39
                ->translate("en")
                ->setNom("Filaments & boats")
                ->setCategory("thin film")
                ->setpdf("uploads/");
        $manager->persist($product39);       
        $product39->mergeNewTranslations();
        $manager->flush();
       
        $product40 = new \App\Entity\Produit();
        $product40
                ->setNom("Cones et liners")
                ->setCategory("couches minces")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product40
                ->translate("en")
                ->setNom("Cones et liners")
                ->setCategory("thin film")
                ->setpdf("uploads/");
        $manager->persist($product40);       
        $product40->mergeNewTranslations();
        $manager->flush();
       
        $product41 = new \App\Entity\Produit();
        $product41
                ->setNom("Cathodes")
                ->setCategory("couches minces")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product41
                ->translate("en")
                ->setNom("Cathodes")
                ->setCategory("thin film")
                ->setpdf("uploads/");
        $manager->persist($product41);       
        $product41->mergeNewTranslations();
        $manager->flush();
       
        $product42 = new \App\Entity\Produit();
        $product42
                ->setNom("Canon à electrons")
                ->setCategory("couches minces")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product42
                ->translate("en")
                ->setNom("E Guns")
                ->setCategory("thin film")
                ->setpdf("uploads/");
        $manager->persist($product42);       
        $product42->mergeNewTranslations();
        $manager->flush();
       
        $product42 = new \App\Entity\Produit();
        $product42
                ->setNom("Pieces détachées")
                ->setCategory("couches minces")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product42
                ->translate("en")
                ->setNom("Spare Parts")
                ->setCategory("thin film")
                ->setpdf("uploads/");
        $manager->persist($product42);       
        $product42->mergeNewTranslations();
        $manager->flush();
       
        $product42 = new \App\Entity\Produit();
        $product42
                ->setNom("Mesure d’epaisseur et quartz pour RQCM")
                ->setCategory("couches minces")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product42
                ->translate("en")
                ->setNom("Thickness measurment and quartz")
                ->setCategory("thin film")
                ->setpdf("uploads/");
        $manager->persist($product42);       
        $product42->mergeNewTranslations();
        $manager->flush();
       
        $product42 = new \App\Entity\Produit();
        $product42
                ->setNom("Elements réfractaires")
                ->setCategory("couches minces")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product42
                ->translate("en")
                ->setNom("Refractory Material")
                ->setCategory("thin film")
                ->setpdf("uploads/");
        $manager->persist($product42);       
        $product42->mergeNewTranslations();
        $manager->flush();
       
        $product42 = new \App\Entity\Produit();
        $product42
                ->setNom("Alimentation plasma")
                ->setCategory("couches minces")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product42
                ->translate("en")
                ->setNom("Plasma power supply")
                ->setCategory("thin film")
                ->setpdf("uploads/");
        $manager->persist($product42);       
        $product42->mergeNewTranslations();
        $manager->flush();
       
        
           
        $product43 = new \App\Entity\Produit();
        $product43
                ->setNom("Lentilles")
                ->setCategory("optique")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product43
                ->translate("en")
                ->setNom("Lenses")
                ->setCategory("optic")
                ->setpdf("uploads/");
        $manager->persist($product43);       
        $product43->mergeNewTranslations();
        $manager->flush();
       
        $product44 = new \App\Entity\Produit();
        $product44
                ->setNom("Prisms")
                ->setCategory("optique")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product44
                ->translate("en")
                ->setNom("Prisms")
                ->setCategory("optic")
                ->setpdf("uploads/");
        $manager->persist($product44);       
        $product44->mergeNewTranslations();
        $manager->flush();
       
        $product45 = new \App\Entity\Produit();
        $product45
                ->setNom("Mirroirs")
                ->setCategory("optique")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product45
                ->translate("en")
                ->setNom("Mirrors")
                ->setCategory("optic")
                ->setpdf("uploads/");
        $manager->persist($product45);       
        $product45->mergeNewTranslations();
        $manager->flush();
       
        $product46 = new \App\Entity\Produit();
        $product46
                ->setNom("Séparateur de faisceau")
                ->setCategory("optique")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product46
                ->translate("en")
                ->setNom("Beam splitters")
                ->setCategory("optic")
                ->setpdf("uploads/");
        $manager->persist($product46);       
        $product46->mergeNewTranslations();
        $manager->flush();
       
        $product47 = new \App\Entity\Produit();
        $product47
                ->setNom("Pièces détachées")
                ->setCategory("optique")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product47
                ->translate("en")
                ->setNom("Pieces détachées ")
                ->setCategory("optic")
                ->setpdf("uploads/");
        $manager->persist($product47);       
        $product47->mergeNewTranslations();
        $manager->flush();
       
        $product48 = new \App\Entity\Produit();
        $product48
                ->setNom("Filtres optiques")
                ->setCategory("optique")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product48
                ->translate("en")
                ->setNom("Optical filters ")
                ->setCategory("optic")
                ->setpdf("uploads/");
        $manager->persist($product48);       
        $product48->mergeNewTranslations();
        $manager->flush();
       
        $product49 = new \App\Entity\Produit();
        $product49
                ->setNom("Fenêtres optiques")
                ->setCategory("optique")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product49
                ->translate("en")
                ->setNom("Optical windows")
                ->setCategory("optic")
                ->setpdf("uploads/");
        $manager->persist($product49);       
        $product49->mergeNewTranslations();
        $manager->flush();
        
        
        
        $product50 = new \App\Entity\Produit();
        $product50
                ->setNom("Grilles et membranes")
                ->setCategory("microscopie")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product50
                ->translate("en")
                ->setNom("Grids & membranes")
                ->setCategory("microscopy")
                ->setpdf("uploads/");
        $manager->persist($product50);       
        $product50->mergeNewTranslations();
        $manager->flush();
        
        $product51 = new \App\Entity\Produit();
        $product51
                ->setNom("Brucelles")
                ->setCategory("microscopie")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product51
                ->translate("en")
                ->setNom("Tweezers")
                ->setCategory("microscopy")
                ->setpdf("uploads/");
        $manager->persist($product51);       
        $product51->mergeNewTranslations();
        $manager->flush();
        
        $product52 = new \App\Entity\Produit();
        $product52
                ->setNom("Préparation d’échantillons")
                ->setCategory("microscopie")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product52
                ->translate("en")
                ->setNom("Sample preparation")
                ->setCategory("microscopy")
                ->setpdf("uploads/");
        $manager->persist($product52);       
        $product52->mergeNewTranslations();
        $manager->flush();
        
        $product53 = new \App\Entity\Produit();
        $product53
                ->setNom("SEM & TEM Microscopie")
                ->setCategory("microscopie")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product53
                ->translate("en")
                ->setNom("SEM & TEM Microscopy")
                ->setCategory("microscopy")
                ->setpdf("uploads/");
        $manager->persist($product53);       
        $product53->mergeNewTranslations();
        $manager->flush();
        
        $product54 = new \App\Entity\Produit();
        $product54
                ->setNom("Equipements")
                ->setCategory("microscopie")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product54
                ->translate("en")
                ->setNom("Equipments")
                ->setCategory("microscopy")
                ->setpdf("uploads/");
        $manager->persist($product54);       
        $product54->mergeNewTranslations();
        $manager->flush();
        
        $product55 = new \App\Entity\Produit();
        $product55
                ->setNom("Spectrométrie XPS")
                ->setCategory("microscopie")
                ->setpdf("uploads/")
                ->translate("fr");  
        $product55
                ->translate("en")
                ->setNom("XPS Spectrometry")
                ->setCategory("microscopy")
                ->setpdf("uploads/");
        $manager->persist($product55);       
        $product55->mergeNewTranslations();
        $manager->flush();
        
    
    
        
    }   */
}


