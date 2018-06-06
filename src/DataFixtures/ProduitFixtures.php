<?php
namespace App\DataFixtures;
use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
class ProduitFixtures extends Fixture implements DependentFixtureInterface {
    public function load(ObjectManager $manager) {
        $product1 = new Produit();
        $product1
                ->setCategory($this->getReference('materiaux'))
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr")
                ->setNom("Cibles de pulvérisation");
        $product1
                ->translate("en")
                ->setNom("Sputtering Targets");
        $manager->persist($product1);
        $product1->mergeNewTranslations();
        $product2 = new Produit();
        $product2
                ->setCategory($this->getReference('materiaux'))
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr")
                ->setNom("Porte-cibles");
        $product2
                ->translate("en")
                ->setNom("Backing plates");
        $manager->persist($product2);
        $product2->mergeNewTranslations();
        $product3 = new Produit();
        $product3
                ->setpdf("uploads/xxx.pdf")
                ->setCategory($this->getReference('materiaux'))
                ->translate("fr")
                ->setNom("Matériaux d'évaporation");
        $product3
                ->translate("en")
                ->setNom("Evaporation material");
        $manager->persist($product3);
        $product3->mergeNewTranslations();
        $product4 = new Produit();
        $product4
                ->setCategory($this->getReference('materiaux'))
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr")
                ->setNom("Fils, Feuilles, Plaques");
        $product4
                ->translate("en")
                ->setNom("Wires, Foils, Plates");
        $manager->persist($product4);
        $product4->mergeNewTranslations();
        $product5 = new Produit();
        $product5
                ->setCategory($this->getReference('materiaux'))
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr")
                ->setNom("Métaux précieux");
        $product5
                ->translate("en")
                ->setNom("Precious metal");
        $manager->persist($product5);
        $product5->mergeNewTranslations();
        
//        $product6 = new Produit();
//        $product6
//                ->setCategory($this->getReference('Cibles de pulvérisation'))
//                ->setpdf("uploads/xxx.pdf")
//                ->translate("fr")
//                ->setNom("Fluorides");
//        $product6
//                ->translate("en")
//                ->setNom("Fluorides");
//        $manager->persist($product6);
//        $product6->mergeNewTranslations();
//        $product7 = new Produit();
//        $product7
//                ->setCategory($this->getReference('Cibles de pulvérisation'))
//                ->setpdf("uploads/xxx.pdf")
//                ->translate("fr")
//                ->setNom("Nitrides");
//        $product7
//                ->translate("en")
//                ->setNom("Nitrides");
//        $manager->persist($product7);
//        $product7->mergeNewTranslations();
//        $product8 = new Produit();
//        $product8
//                ->setCategory($this->getReference('Cibles de pulvérisation'))
//                ->setpdf("uploads/xxx.pdf")
//                ->translate("fr")
//                ->setNom("Oxydes");
//        $product8
//                ->translate("en")
//                ->setNom("Oxydes");
//        $manager->persist($product8);
//        $product8->mergeNewTranslations();
//        $product9 = new Produit();
//        $product9
//                ->setCategory($this->getReference('Cibles de pulvérisation'))
//                ->setpdf("uploads/xxx.pdf")
//                ->translate("fr")
//                ->setNom("Sélénides");
//        $product9
//                ->translate("en")
//                ->setNom("Sélénides");
//        $manager->persist($product9);
//        $product9->mergeNewTranslations();
//        $product10 = new Produit();
//        $product10
//                ->setCategory($this->getReference('Cibles de pulvérisation'))
//                ->setpdf("uploads/xxx.pdf")
//                ->translate("fr")
//                ->setNom("Silicides");
//        $product10
//                ->translate("en")
//                ->setNom("Silicides");
//        $manager->persist($product10);
//        $product10->mergeNewTranslations();
//        $product11 = new Produit();
//        $product11
//                ->setCategory($this->getReference('Cibles de pulvérisation'))
//                ->setpdf("uploads/xxx.pdf")
//                ->translate("fr")
//                ->setNom("Sulfides");
//        $product11
//                ->translate("en")
//                ->setNom("Sulfides");
//        $manager->persist($product11);
//        $product11->mergeNewTranslations();
//        $product12 = new Produit();
//        $product12
//                ->setCategory($this->getReference('Cibles de pulvérisation'))
//                ->setpdf("uploads/xxx.pdf")
//                ->translate("fr")
//                ->setNom("Tellurides");
//        $product12
//                ->translate("en")
//                ->setNom("Tellurides");
//        $manager->persist($product12);
//        $product12->mergeNewTranslations();
//        
//        
//        
//        
//        $product12b = new Produit();
//        $product12b
//                ->setCategory($this->getReference('Porte-cibles'))
//                ->setpdf("uploads/xxx.pdf")
//                ->translate("fr")
//                ->setNom("Xxxx");
//        $product12b
//                ->translate("en")
//                ->setNom("Xxxx");
//        $manager->persist($product12b);
//        $product12b->mergeNewTranslations();
//        
//         
//        $product13 = new Produit();
//        $product13
//                ->setCategory($this->getReference('evaporation material'))
//                ->setpdf("uploads/pdf_produits/Evaporation/Eng/Evap-metaux-purs-GB-Sept-2012.pdf")
//                ->translate("fr")
//                ->setNom("Métaux Purs");
//        $product13
//                ->translate("en")
//                ->setNom("Pur Metals");
//        $manager->persist($product13);
//        $product13->mergeNewTranslations();
//        $product14 = new Produit();
//        $product14
//                ->setCategory($this->getReference('evaporation material'))
//                ->setpdf("#")
//                ->translate("fr")
//                ->setNom("Alliages et Céramiques");
//        $product14
//                ->translate("en")
//                ->setNom("Alloys & Ceramic");
//        $manager->persist($product14);
//        $product14->mergeNewTranslations();
//        $product15 = new Produit();
//        $product15
//                ->setCategory($this->getReference('evaporation material'))
//                ->setpdf("uploads/pdf_produits/Evaporation/Eng/Evap-Antimonides-sept-2012-En.pdf")
//                ->translate("fr")
//                ->setNom("Antimonides");
//        $product15
//                ->translate("en")
//                ->setNom("Antimonides");
//        $manager->persist($product15);
//        $product15->mergeNewTranslations();
//        $product16 = new Produit();
//        $product16
//                ->setCategory($this->getReference('evaporation material'))
//                ->setpdf("uploads/pdf_produits/Evaporation/Eng/Evap-arsenides-sept-2012-En.pdf")
//                ->translate("fr")
//                ->setNom("Arsenides");
//        $product16
//                ->translate("en")
//                ->setNom("Arsenides");
//        $manager->persist($product16);
//        $product16->mergeNewTranslations();
//        $product17 = new Produit();
//        $product17
//                ->setCategory($this->getReference('evaporation material'))
//                ->setpdf("uploads/pdf_produits/Evaporation/Eng/Evap-Borides-sept-2012-En.pdf")
//                ->translate("fr")
//                ->setNom("Borides");
//        $product17
//                ->translate("en")
//                ->setNom("Borides");
//        $manager->persist($product17);
//        $product17->mergeNewTranslations();
//        $product18 = new Produit();
//        $product18
//                ->setCategory($this->getReference('evaporation material'))
//                ->setpdf("uploads/pdf_produits/Evaporation/Eng/Evap-Carbide-sept-2012-En.pdf")
//                ->translate("fr")
//                ->setNom("Carbides");
//        $product18
//                ->translate("en")
//                ->setNom("Carbides");
//        $manager->persist($product18);
//        $product18->mergeNewTranslations();
//        $product19 = new Produit();
//        $product19
//                ->setCategory($this->getReference('evaporation material'))
//                ->setpdf("uploads/pdf_produits/Evaporation/Eng/Evap-Fluorides-sept-2012-En.pdf")
//                ->translate("fr")
//                ->setNom("Fluorides");
//        $product19
//                ->translate("en")
//                ->setNom("Fluorides");
//        $manager->persist($product19);
//        $product19->mergeNewTranslations();
//        $product20 = new Produit();
//        $product20
//                ->setCategory($this->getReference('evaporation material'))
//                ->setpdf("uploads/pdf_produits/Evaporation/Eng/Evap-Nitrides-sept-2012-En.pdf")
//                ->translate("fr")
//                ->setNom("Nitrides");
//        $product20
//                ->translate("en")
//                ->setNom("Nitrides");
//        $manager->persist($product20);
//        $product20->mergeNewTranslations();
//        $product21 = new Produit();
//        $product21
//                ->setCategory($this->getReference('evaporation material'))
//                ->setpdf("uploads/pdf_produits/Evaporation/Eng/Evap-Oxides-sept-2012-En.pdf")
//                ->translate("fr")
//                ->setNom("Oxydes");
//        $product21
//                ->translate("en")
//                ->setNom("Oxydes");
//        $manager->persist($product21);
//        $product21->mergeNewTranslations();
//        $product22 = new Produit();
//        $product22
//                ->setCategory($this->getReference('evaporation material'))
//                ->setpdf("uploads/pdf_produits/Evaporation/Eng/Evap-Selenides-sept-2012-En.pdf")
//                ->translate("fr")
//                ->setNom("Sélénides");
//        $product22
//                ->translate("en")
//                ->setNom("Sélénides");
//        $manager->persist($product22);
//        $product22->mergeNewTranslations();
//        $product23 = new Produit();
//        $product23
//                ->setCategory($this->getReference('evaporation material'))
//                ->setpdf("uploads/pdf_produits/Evaporation/Eng/Evap-Silicides-sept-2012-En.pdf")
//                ->translate("fr")
//                ->setNom("Silicides");
//        $product23
//                ->translate("en")
//                ->setNom("Silicides");
//        $manager->persist($product23);
//        $product23->mergeNewTranslations();
//        $product24 = new Produit();
//        $product24
//                ->setCategory($this->getReference('evaporation material'))
//                ->setpdf("uploads/pdf_produits/Evaporation/Eng/Evap-sulfides-Sept-2012-En.pdf")
//                ->translate("fr")
//                ->setNom("Sulfides");
//        $product24
//                ->translate("en")
//                ->setNom("Sulfides");
//        $manager->persist($product24);
//        $product24->mergeNewTranslations();
//        $product25 = new Produit();
//        $product25
//                ->setCategory($this->getReference('evaporation material'))
//                ->setpdf("uploads/pdf_produits/Evaporation/Eng/Evap-Tellurides-sept-2012-En.pdf")
//                ->translate("fr")
//                ->setNom("Tellurides");
//        $product25
//                ->translate("en")
//                ->setNom("Tellurides");
//        $manager->persist($product25);
//        $product25->mergeNewTranslations();
//        $product26 = new Produit();
//        $product26
//                ->setCategory($this->getReference('fils feuilles plaques'))
//                ->setpdf("uploads/")
//                ->translate("fr")
//                ->setNom("Fils, Feuilles, Plaques");
//        $product26
//                ->translate("en")
//                ->setNom("Wires Foils Plates");
//        $manager->persist($product26);
//        $product26->mergeNewTranslations();
//        $product27 = new Produit();
//        $product27
//                ->setCategory($this->getReference('metaux precieux'))
//                ->setpdf("uploads/")
//                ->translate("fr")
//                ->setNom("Métaux précieux");
//        $product27
//                ->translate("en")
//                ->setNom("Precious metal");
//        $manager->persist($product27);
//        $product27->mergeNewTranslations();
//        $product28 = new Produit();
//        $product28
//                ->setCategory($this->getReference('metaux precieux'))
//                ->setpdf("uploads/")
//                ->translate("fr")
//                ->setNom("Recyclage des cibles");
//        $product28
//                ->translate("en")
//                ->setNom("Targets recycling");
//        $manager->persist($product28);
//        $product28->mergeNewTranslations();
        
        $product6 = new Produit();
        $product6
                ->setCategory($this->getReference('substrats'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Substrats Si");
        $product6
                ->translate("en")
                ->setNom("Substrats Si");
        $manager->persist($product6);
        $product6->mergeNewTranslations();
        $product7 = new Produit();
        $product7
                ->setCategory($this->getReference('substrats'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Substrats III-V");
        $product7
                ->translate("en")
                ->setNom("Substrats III-V");
        $manager->persist($product7);
        $product7->mergeNewTranslations();
        $product8 = new Produit();
        $product8
                ->setCategory($this->getReference('substrats'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Substrats II-VI");
        $product8
                ->translate("en")
                ->setNom("Substrats II-VI");
        $manager->persist($product8);
        $product8->mergeNewTranslations();
        $product9 = new Produit();
        $product9
                ->setCategory($this->getReference('substrats'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Substrats SOI");
        $product9
                ->translate("en")
                ->setNom("Substrats SOI");
        $manager->persist($product9);
        $product9->mergeNewTranslations();
        $product10 = new Produit();
        $product10
                ->setCategory($this->getReference('substrats'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Substrats SiC");
        $product10
                ->translate("en")
                ->setNom("Substrats SiC");
        $manager->persist($product10);
        $product10->mergeNewTranslations();
        $product11 = new Produit();
        $product11
                ->setCategory($this->getReference('substrats'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Substrats verre et quartz");
        $product11
                ->translate("en")
                ->setNom("Glass & Quartz windows");
        $manager->persist($product11);
        $product11->mergeNewTranslations();
        $product12 = new Produit();
        $product12
                ->setCategory($this->getReference('substrats'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Substrats Ge");
        $product12
                ->translate("en")
                ->setNom("Substrats Ge");
        $manager->persist($product12);
        $product12->mergeNewTranslations();
        $product13 = new Produit();
        $product13
                ->setCategory($this->getReference('substrats'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Sapphire");
        $product13
                ->translate("en")
                ->setNom("Sapphire");
        $manager->persist($product13);
        $product13->mergeNewTranslations();
        $product14 = new Produit();
        $product14
                ->setCategory($this->getReference('substrats'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Substrats infrarouges");
        $product14
                ->translate("en")
                ->setNom("Infrared windows");
        $manager->persist($product14);
        $product14->mergeNewTranslations();
        
        $product15 = new Produit();
        $product15
                ->setCategory($this->getReference('services'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Montage de cible");
        $product15
                ->translate("en")
                ->setNom("Bonding service");
        $manager->persist($product15);
        $product15->mergeNewTranslations();
        $product16 = new Produit();
        $product16
                ->setCategory($this->getReference('services'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Dépots à façon et découpe");
        $product16
                ->translate("en")
                ->setNom("Coating Service and Dicing");
        $manager->persist($product16);
        $product16->mergeNewTranslations();
        $product17 = new Produit();
        $product17
                ->setCategory($this->getReference('services'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Nitruration");
        $product17
                ->translate("en")
                ->setNom("Nitruration");
        $manager->persist($product17);
        $product17->mergeNewTranslations();
        $product18 = new Produit();
        $product18
                ->setCategory($this->getReference('services'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Oxydation thermique");
        $product18
                ->translate("en")
                ->setNom("Thermal oxidation");
        $manager->persist($product18);
        $product18->mergeNewTranslations();
        $product19 = new Produit();
        $product19
                ->setCategory($this->getReference('services'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Découpe de substrats Si");
        $product19
                ->translate("en")
                ->setNom("Si wafers Dicing");
        $manager->persist($product19);
        $product19->mergeNewTranslations();
        $product20 = new Produit();
        $product20
                ->setCategory($this->getReference('services'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Certificats d'analyse");
        $product20
                ->translate("en")
                ->setNom("Analytical services & Quality");
        $manager->persist($product20);
        $product20->mergeNewTranslations();
        $product21 = new Produit();
        $product21
                ->setCategory($this->getReference('services'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Recyclage des cibles");
        $product21
                ->translate("en")
                ->setNom("Targets recycling ");
        $manager->persist($product21);
        $product21->mergeNewTranslations();
        
        $product22 = new Produit();
        $product22
                ->setCategory($this->getReference('instrumentation'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Magnetron");
        $product22
                ->translate("en")
                ->setNom("Magnetron");
        $manager->persist($product22);
        $product22->mergeNewTranslations();
        $product23 = new Produit();
        $product23
                ->setCategory($this->getReference('instrumentation'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Systèmes de dépôts");
        $product23
                ->translate("en")
                ->setNom("Deposition system");
        $manager->persist($product23);
        $product23->mergeNewTranslations();
        $product24 = new Produit();
        $product24
                ->setCategory($this->getReference('instrumentation'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Canon à électrons & Evaporateurs");
        $product24
                ->translate("en")
                ->setNom("E-guns & Evaporation sources");
        $manager->persist($product24);
        $product24->mergeNewTranslations();
        $product25 = new Produit();
        $product25
                ->setCategory($this->getReference('instrumentation'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Pièces pour canon");
        $product25
                ->translate("en")
                ->setNom("Guns spare-parts");
        $manager->persist($product25);
        $product25->mergeNewTranslations();
        $product26 = new Produit();
        $product26
                ->setCategory($this->getReference('instrumentation'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Mesure d'épaisseur");
        $product26
                ->translate("en")
                ->setNom("Thickness measurement");
        $manager->persist($product26);
        $product26->mergeNewTranslations();
        $product27 = new Produit();
        $product27
                ->setCategory($this->getReference('instrumentation'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Alimentation plasma");
        $product27
                ->translate("en")
                ->setNom("Plasma power supplies");
        $manager->persist($product27);
        $product27->mergeNewTranslations();
        $product28 = new Produit();
        $product28
                ->setCategory($this->getReference('instrumentation'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Mesure de pression");
        $product28
                ->translate("en")
                ->setNom("Pressure measurement");
        $manager->persist($product28);
        $product28->mergeNewTranslations();
        $product29 = new Produit();
        $product29
                ->setCategory($this->getReference('instrumentation'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("RGA - Analyseurs de gaz");
        $product29
                ->translate("en")
                ->setNom("RGA - Gas analyzers");
        $manager->persist($product29);
        $product29->mergeNewTranslations();   
        $product30 = new Produit();
        $product30
                ->setCategory($this->getReference('instrumentation'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Pompes à vide");
        $product30
                ->translate("en")
                ->setNom("Vacuum pumps");
        $manager->persist($product30);
        $product30->mergeNewTranslations();
        $product31 = new Produit();
        $product31
                ->setCategory($this->getReference('instrumentation'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Détecteurs de fuite");
        $product31
                ->translate("en")
                ->setNom("Leak detector");
        $manager->persist($product31);
        $product31->mergeNewTranslations();
        $product32 = new Produit();
        $product32
                ->setCategory($this->getReference('instrumentation'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Préparation d’échantillons");
        $product32
                ->translate("en")
                ->setNom("Samples preparation");
        $manager->persist($product32);
        $product32->mergeNewTranslations();
        $product33 = new Produit();
        $product33
                ->setCategory($this->getReference('instrumentation'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Spectrométrie");
        $product33
                ->translate("en")
                ->setNom("Spectrométry");
        $manager->persist($product33);
        $product33->mergeNewTranslations();  
        
        $product34 = new Produit();
        $product34
                ->setCategory($this->getReference('consommables'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Filaments et Nacelles");
        $product34
                ->translate("en")
                ->setNom("Filaments & boats");
        $manager->persist($product34);
        $product34->mergeNewTranslations();
        $product35 = new Produit();
        $product35
                ->setCategory($this->getReference('consommables'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Cônes et liners");
        $product35
                ->translate("en")
                ->setNom("Cones and liners");
        $manager->persist($product35);
        $product35->mergeNewTranslations();
        $product36 = new Produit();
        $product36
                ->setCategory($this->getReference('consommables'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Quartz pour RQCM");
        $product36
                ->translate("en")
                ->setNom("Crystal Quartz for RQCM");
        $manager->persist($product36);
        $product36->mergeNewTranslations();
        $product37 = new Produit();
        $product37
                ->setCategory($this->getReference('consommables'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Brides et raccords");
        $product37
                ->translate("en")
                ->setNom("Flanges & connectors");
        $manager->persist($product37);
        $product37->mergeNewTranslations();
        $product38 = new Produit();
        $product38
                ->setCategory($this->getReference('consommables'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Hublots");
        $product38
                ->translate("en")
                ->setNom("Viewports");
        $manager->persist($product38);
        $product38->mergeNewTranslations();
        $product39 = new Produit();
        $product39
                ->setCategory($this->getReference('consommables'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Vannes");
        $product39
                ->translate("en")
                ->setNom("Vacuum valves");
        $manager->persist($product39);
        $product39->mergeNewTranslations();
        $product40 = new Produit();
        $product40
                ->setCategory($this->getReference('consommables'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Passages étanches");
        $product40
                ->translate("en")
                ->setNom("Feedthroughs");
        $manager->persist($product40);
        $product40->mergeNewTranslations();
        $product41 = new Produit();
        $product41
                ->setCategory($this->getReference('consommables'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Passages de mouvement");
        $product41
                ->translate("en")
                ->setNom("Motion feedthroughs");
        $manager->persist($product41);
        $product41->mergeNewTranslations();
        $product42 = new Produit();
        $product42
                ->setCategory($this->getReference('consommables'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Soufflets");
        $product42
                ->translate("en")
                ->setNom("Bellows");
        $manager->persist($product42);
        $product42->mergeNewTranslations();
        $product43 = new Produit();
        $product43
                ->setCategory($this->getReference('consommables'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Huiles et graisses");
        $product43
                ->translate("en")
                ->setNom("Oiles & greases");
        $manager->persist($product43);
        $product43->mergeNewTranslations();
        $product44 = new Produit();
        $product44
                ->setCategory($this->getReference('consommables'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Brucelles");
        $product44
                ->translate("en")
                ->setNom("Tweezers");
        $manager->persist($product44);
        $product44->mergeNewTranslations();
  
        $product45 = new Produit();
        $product45
                ->setCategory($this->getReference('optique'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Lentilles");
        $product45
                ->translate("en")
                ->setNom("Optical Lenses");
        $manager->persist($product45);
        $product45->mergeNewTranslations();
        $product46 = new Produit();
        $product46
                ->setCategory($this->getReference('optique'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Prismes");
        $product46
                ->translate("en")
                ->setNom("Prisms");
        $manager->persist($product46);
        $product46->mergeNewTranslations();
        $product47 = new Produit();
        $product47
                ->setCategory($this->getReference('optique'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Mirroirs");
        $product47
                ->translate("en")
                ->setNom("Mirrors");
        $manager->persist($product47);
        $product47->mergeNewTranslations();
        $product48 = new Produit();
        $product48
                ->setCategory($this->getReference('optique'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Séparateur de faisceaux");
        $product48
                ->translate("en")
                ->setNom("Beam splitters");
        $manager->persist($product48);
        $product48->mergeNewTranslations();
        $product49 = new Produit();
        $product49
                ->setCategory($this->getReference('optique'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Polarisation");
        $product49
                ->translate("en")
                ->setNom("Polarization");
        $manager->persist($product49);
        $product49->mergeNewTranslations();
        $product50 = new Produit();
        $product50
                ->setCategory($this->getReference('optique'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Filtres optiques");
        $product50
                ->translate("en")
                ->setNom("Optical filters ");
        $manager->persist($product50);
        $product50->mergeNewTranslations();
        $product51 = new Produit();
        $product51
                ->setCategory($this->getReference('optique'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Substrats verre et quartz");
        $product51
                ->translate("en")
                ->setNom("Glass & Quartz windows");
        $manager->persist($product51);
        $product51->mergeNewTranslations();
        $product52 = new Produit();
        $product52
                ->setCategory($this->getReference('optique'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Infrarouges");
        $product52
                ->translate("en")
                ->setNom("Infrared material");
        $manager->persist($product52);
        $product52->mergeNewTranslations();
        
        $product53 = new Produit();
        $product53
                ->setCategory($this->getReference('organic electronics'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("OLED");
        $product53
                ->translate("en")
                ->setNom("OLED");
        $manager->persist($product53);
        $product53->mergeNewTranslations();
        $manager->flush();
        $product54 = new Produit();
        $product54
                ->setCategory($this->getReference('organic electronics'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("TADF OLED");
        $product54
                ->translate("en")
                ->setNom("TADF OLED");
        $manager->persist($product54);
        $product54->mergeNewTranslations();
        $manager->flush();
        $product55 = new Produit();
        $product55
                ->setCategory($this->getReference('organic electronics'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Solution-processed OLED");
        $product55
                ->translate("en")
                ->setNom("Solution-processed OLED");
        $manager->persist($product55);
        $product55->mergeNewTranslations();
        $manager->flush();
        $product56 = new Produit();
        $product56
                ->setCategory($this->getReference('organic electronics'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("OPV");
        $product56
                ->translate("en")
                ->setNom("OPV");
        $manager->persist($product56);
        $product56->mergeNewTranslations();
        $manager->flush();
        $product57 = new Produit();
        $product57
                ->setCategory($this->getReference('organic electronics'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("DSSC");
        $product57
                ->translate("en")
                ->setNom("DSSC");
        $manager->persist($product57);
        $product57->mergeNewTranslations();
        $manager->flush();
        $product58 = new Produit();
        $product58
                ->setCategory($this->getReference('organic electronics'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Flexible Printed Electonics");
        $product58
                ->translate("en")
                ->setNom("Flexible Printed Electonics");
        $manager->persist($product58);
        $product58->mergeNewTranslations();
        $manager->flush();
        $product59 = new Produit();
        $product59
                ->setCategory($this->getReference('organic electronics'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Perovskite Solar Cells");
        $product59
                ->translate("en")
                ->setNom("Perovskite Solar Cells");
        $manager->persist($product59);
        $product59->mergeNewTranslations();
        $manager->flush();
        $product60 = new Produit();
        $product60
                ->setCategory($this->getReference('organic electronics'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("OTFT");
        $product60
                ->translate("en")
                ->setNom("OTFT");
        $manager->persist($product60);
        $product60->mergeNewTranslations();
        $manager->flush();
        $product61 = new Produit();
        $product61
                ->setCategory($this->getReference('organic electronics'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Photonic & Optical Device");
        $product61
                ->translate("en")
                ->setNom("Photonic & Optical Device");
        $manager->persist($product61);
        $product61->mergeNewTranslations();
        $manager->flush();
        $product62 = new Produit();
        $product62
                ->setCategory($this->getReference('organic electronics'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Synthetic intermadiate & Reagents");
        $product62
                ->translate("en")
                ->setNom("Synthetic intermadiate & Reagents");
        $manager->persist($product62);
        $product62->mergeNewTranslations();
        $manager->flush();
        $product63 = new Produit();
        $product63
                ->setCategory($this->getReference('organic electronics'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Electrode / Substrate & Sealing");
        $product63
                ->translate("en")
                ->setNom("Electrode / Substrate & Sealing");
        $manager->persist($product63);
        $product63->mergeNewTranslations();
        $manager->flush();
        
        
    }
    public function getDependencies(): array {
        return [
            CategoryFixtures::class,
        ];
    }
}