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
                ->setCategory($this->getReference('Cibles de pulvérisation'))
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr")
                ->setNom("Métaux Purs");
        $product1
                ->translate("en")
                ->setNom("Pur Metals");
        $manager->persist($product1);
        $product1->mergeNewTranslations();
        $product1b = new Produit();
        $product1b
                ->setCategory($this->getReference('Cibles de pulvérisation'))
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr")
                ->setNom("Alliages & céramiques");
        $product1b
                ->translate("en")
                ->setNom("Alloys & Ceramics");
        $manager->persist($product1b);
        $product1b->mergeNewTranslations();
        $product2 = new Produit();
        $product2
                ->setCategory($this->getReference('Cibles de pulvérisation'))
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr")
                ->setNom("Antimonides");
        $product2
                ->translate("en")
                ->setNom("Antimonides");
        $manager->persist($product2);
        $product2->mergeNewTranslations();
        $product3 = new Produit();
        $product3
                ->setpdf("uploads/xxx.pdf")
                ->setCategory($this->getReference('Cibles de pulvérisation'))
                ->translate("fr")
                ->setNom("Arsenides");
        $product3
                ->translate("en")
                ->setNom("Arsenides");
        $manager->persist($product3);
        $product3->mergeNewTranslations();
        $product4 = new Produit();
        $product4
                ->setCategory($this->getReference('Cibles de pulvérisation'))
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr")
                ->setNom("Borides");
        $product4
                ->translate("en")
                ->setNom("Borides");
        $manager->persist($product4);
        $product4->mergeNewTranslations();
        $product5 = new Produit();
        $product5
                ->setCategory($this->getReference('Cibles de pulvérisation'))
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr")
                ->setNom("Carbides");
        $product5
                ->translate("en")
                ->setNom("Carbides");
        $manager->persist($product5);
        $product5->mergeNewTranslations();
        $product6 = new Produit();
        $product6
                ->setCategory($this->getReference('Cibles de pulvérisation'))
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr")
                ->setNom("Fluorides");
        $product6
                ->translate("en")
                ->setNom("Fluorides");
        $manager->persist($product6);
        $product6->mergeNewTranslations();
        $product7 = new Produit();
        $product7
                ->setCategory($this->getReference('Cibles de pulvérisation'))
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr")
                ->setNom("Nitrides");
        $product7
                ->translate("en")
                ->setNom("Nitrides");
        $manager->persist($product7);
        $product7->mergeNewTranslations();
        $product8 = new Produit();
        $product8
                ->setCategory($this->getReference('Cibles de pulvérisation'))
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr")
                ->setNom("Oxydes");
        $product8
                ->translate("en")
                ->setNom("Oxydes");
        $manager->persist($product8);
        $product8->mergeNewTranslations();
        $product9 = new Produit();
        $product9
                ->setCategory($this->getReference('Cibles de pulvérisation'))
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr")
                ->setNom("Sélénides");
        $product9
                ->translate("en")
                ->setNom("Sélénides");
        $manager->persist($product9);
        $product9->mergeNewTranslations();
        $product10 = new Produit();
        $product10
                ->setCategory($this->getReference('Cibles de pulvérisation'))
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr")
                ->setNom("Silicides");
        $product10
                ->translate("en")
                ->setNom("Silicides");
        $manager->persist($product10);
        $product10->mergeNewTranslations();
        $product11 = new Produit();
        $product11
                ->setCategory($this->getReference('Cibles de pulvérisation'))
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr")
                ->setNom("Sulfides");
        $product11
                ->translate("en")
                ->setNom("Sulfides");
        $manager->persist($product11);
        $product11->mergeNewTranslations();
        $product12 = new Produit();
        $product12
                ->setCategory($this->getReference('Cibles de pulvérisation'))
                ->setpdf("uploads/xxx.pdf")
                ->translate("fr")
                ->setNom("Tellurides");
        $product12
                ->translate("en")
                ->setNom("Tellurides");
        $manager->persist($product12);
        $product12->mergeNewTranslations();
        $product13 = new Produit();
        $product13
                ->setCategory($this->getReference('evaporation materiau'))
                ->setpdf("uploads/pdf_produits/Evaporation/Eng/Evap-metaux-purs-GB-Sept-2012.pdf")
                ->translate("fr")
                ->setNom("Métaux Purs");
        $product13
                ->translate("en")
                ->setNom("Pur Metals");
        $manager->persist($product13);
        $product13->mergeNewTranslations();
        $product14 = new Produit();
        $product14
                ->setCategory($this->getReference('evaporation materiau'))
                ->setpdf("#")
                ->translate("fr")
                ->setNom("Alliages et Céramiques");
        $product14
                ->translate("en")
                ->setNom("Alloys & Ceramic");
        $manager->persist($product14);
        $product14->mergeNewTranslations();
        $product15 = new Produit();
        $product15
                ->setCategory($this->getReference('evaporation materiau'))
                ->setpdf("uploads/pdf_produits/Evaporation/Eng/Evap-Antimonides-sept-2012-En.pdf")
                ->translate("fr")
                ->setNom("Antimonides");
        $product15
                ->translate("en")
                ->setNom("Antimonides");
        $manager->persist($product15);
        $product15->mergeNewTranslations();
        $product16 = new Produit();
        $product16
                ->setCategory($this->getReference('evaporation materiau'))
                ->setpdf("uploads/pdf_produits/Evaporation/Eng/Evap-arsenides-sept-2012-En.pdf")
                ->translate("fr")
                ->setNom("Arsenides");
        $product16
                ->translate("en")
                ->setNom("Arsenides");
        $manager->persist($product16);
        $product16->mergeNewTranslations();
        $product17 = new Produit();
        $product17
                ->setCategory($this->getReference('evaporation materiau'))
                ->setpdf("uploads/pdf_produits/Evaporation/Eng/Evap-Borides-sept-2012-En.pdf")
                ->translate("fr")
                ->setNom("Borides");
        $product17
                ->translate("en")
                ->setNom("Borides");
        $manager->persist($product17);
        $product17->mergeNewTranslations();
        $product18 = new Produit();
        $product18
                ->setCategory($this->getReference('evaporation materiau'))
                ->setpdf("uploads/pdf_produits/Evaporation/Eng/Evap-Carbide-sept-2012-En.pdf")
                ->translate("fr")
                ->setNom("Carbides");
        $product18
                ->translate("en")
                ->setNom("Carbides");
        $manager->persist($product18);
        $product18->mergeNewTranslations();
        $product19 = new Produit();
        $product19
                ->setCategory($this->getReference('evaporation materiau'))
                ->setpdf("uploads/pdf_produits/Evaporation/Eng/Evap-Fluorides-sept-2012-En.pdf")
                ->translate("fr")
                ->setNom("Fluorides");
        $product19
                ->translate("en")
                ->setNom("Fluorides");
        $manager->persist($product19);
        $product19->mergeNewTranslations();
        $product20 = new Produit();
        $product20
                ->setCategory($this->getReference('evaporation materiau'))
                ->setpdf("uploads/pdf_produits/Evaporation/Eng/Evap-Nitrides-sept-2012-En.pdf")
                ->translate("fr")
                ->setNom("Nitrides");
        $product20
                ->translate("en")
                ->setNom("Nitrides");
        $manager->persist($product20);
        $product20->mergeNewTranslations();
        $product21 = new Produit();
        $product21
                ->setCategory($this->getReference('evaporation materiau'))
                ->setpdf("uploads/pdf_produits/Evaporation/Eng/Evap-Oxides-sept-2012-En.pdf")
                ->translate("fr")
                ->setNom("Oxydes");
        $product21
                ->translate("en")
                ->setNom("Oxydes");
        $manager->persist($product21);
        $product21->mergeNewTranslations();
        $product22 = new Produit();
        $product22
                ->setCategory($this->getReference('evaporation materiau'))
                ->setpdf("uploads/pdf_produits/Evaporation/Eng/Evap-Selenides-sept-2012-En.pdf")
                ->translate("fr")
                ->setNom("Sélénides");
        $product22
                ->translate("en")
                ->setNom("Sélénides");
        $manager->persist($product22);
        $product22->mergeNewTranslations();
        $product23 = new Produit();
        $product23
                ->setCategory($this->getReference('evaporation materiau'))
                ->setpdf("uploads/pdf_produits/Evaporation/Eng/Evap-Silicides-sept-2012-En.pdf")
                ->translate("fr")
                ->setNom("Silicides");
        $product23
                ->translate("en")
                ->setNom("Silicides");
        $manager->persist($product23);
        $product23->mergeNewTranslations();
        $product24 = new Produit();
        $product24
                ->setCategory($this->getReference('evaporation materiau'))
                ->setpdf("uploads/pdf_produits/Evaporation/Eng/Evap-sulfides-Sept-2012-En.pdf")
                ->translate("fr")
                ->setNom("Sulfides");
        $product24
                ->translate("en")
                ->setNom("Sulfides");
        $manager->persist($product24);
        $product24->mergeNewTranslations();
        $product25 = new Produit();
        $product25
                ->setCategory($this->getReference('evaporation materiau'))
                ->setpdf("uploads/pdf_produits/Evaporation/Eng/Evap-Tellurides-sept-2012-En.pdf")
                ->translate("fr")
                ->setNom("Tellurides");
        $product25
                ->translate("en")
                ->setNom("Tellurides");
        $manager->persist($product25);
        $product25->mergeNewTranslations();
        $product26 = new Produit();
        $product26
                ->setCategory($this->getReference('fils feuilles plaques'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Fils, Feuilles, Plaques");
        $product26
                ->translate("en")
                ->setNom("Wires Foils Plates");
        $manager->persist($product26);
        $product26->mergeNewTranslations();
        $product27 = new Produit();
        $product27
                ->setCategory($this->getReference('metaux precieux'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Métaux précieux");
        $product27
                ->translate("en")
                ->setNom("Precious metal");
        $manager->persist($product27);
        $product27->mergeNewTranslations();
        $product28 = new Produit();
        $product28
                ->setCategory($this->getReference('metaux precieux'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Recyclage des cibles");
        $product28
                ->translate("en")
                ->setNom("Target recycling");
        $manager->persist($product28);
        $product28->mergeNewTranslations();
        $product29 = new Produit();
        $product29
                ->setCategory($this->getReference('substrats'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Substrats Si & monocristallins");
        $product29
                ->translate("en")
                ->setNom("Si & Crystal Wafers");
        $manager->persist($product29);
        $product29->mergeNewTranslations();
        $product30 = new Produit();
        $product30
                ->setCategory($this->getReference('substrats'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Substrats verre");
        $product30
                ->translate("en")
                ->setNom("Glass substrates");
        $manager->persist($product30);
        $product30->mergeNewTranslations();
        $product30b = new Produit();
        $product30b
                ->setCategory($this->getReference('substrats'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Substrats céramiques");
        $product30b
                ->translate("en")
                ->setNom("Ceramic substrates");
        $manager->persist($product30b);
        $product30b->mergeNewTranslations();
        $product31 = new Produit();
        $product31
                ->setCategory($this->getReference('services'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Montage de cible");
        $product31
                ->translate("en")
                ->setNom("Bonding service");
        $manager->persist($product31);
        $product31->mergeNewTranslations();
        $product32 = new Produit();
        $product32
                ->setCategory($this->getReference('services'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Dépots à façon et découpe");
        $product32
                ->translate("en")
                ->setNom("Coating Service and Dicing");
        $manager->persist($product32);
        $product32->mergeNewTranslations();
        $product33 = new Produit();
        $product33
                ->setCategory($this->getReference('services'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Nitruration");
        $product33
                ->translate("en")
                ->setNom("Nitruration");
        $manager->persist($product33);
        $product33->mergeNewTranslations();
        $product34 = new Produit();
        $product34
                ->setCategory($this->getReference('services'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Oxydation thermique");
        $product34
                ->translate("en")
                ->setNom("Thermal oxidation");
        $manager->persist($product34);
        $product34->mergeNewTranslations();
        $product35 = new Produit();
        $product35
                ->setCategory($this->getReference('services'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Découpe de substrats Si");
        $product35
                ->translate("en")
                ->setNom("Si wafers Dicing");
        $manager->persist($product35);
        $product35->mergeNewTranslations();
        $product36 = new Produit();
        $product36
                ->setCategory($this->getReference('services'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Certificats d'analyse");
        $product36
                ->translate("en")
                ->setNom("Analytical services & Quality");
        $manager->persist($product36);
        $product36->mergeNewTranslations();
        $product37 = new Produit();
        $product37
                ->setCategory($this->getReference('services'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Recyclage des cibles");
        $product37
                ->translate("en")
                ->setNom("Target recycling ");
        $manager->persist($product37);
        $product37->mergeNewTranslations();
        $product38 = new Produit();
        $product38
                ->setCategory($this->getReference('pompe vide'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Pompe à vide");
        $product38
                ->translate("en")
                ->setNom("Vacuum pomp");
        $manager->persist($product38);
        $product38->mergeNewTranslations();
        $product39 = new Produit();
        $product39
                ->setCategory($this->getReference('couches fines'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Filaments et Nacelles");
        $product39
                ->translate("en")
                ->setNom("Filaments & boats");
        $manager->persist($product39);
        $product39->mergeNewTranslations();
        $product40 = new Produit();
        $product40
                ->setCategory($this->getReference('couches fines'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Cones et liners");
        $product40
                ->translate("en")
                ->setNom("Cones et liners");
        $manager->persist($product40);
        $product40->mergeNewTranslations();
        $product41 = new Produit();
        $product41
                ->setCategory($this->getReference('couches fines'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Cathodes");
        $product41
                ->translate("en")
                ->setNom("Cathodes");
        $manager->persist($product41);
        $product41->mergeNewTranslations();
        $product42 = new Produit();
        $product42
                ->setCategory($this->getReference('couches fines'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Canon à electrons");
        $product42
                ->translate("en")
                ->setNom("E Guns");
        $manager->persist($product42);
        $product42->mergeNewTranslations();
        $product43 = new Produit();
        $product43
                ->setCategory($this->getReference('couches fines'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Pieces détachées");
        $product43
                ->translate("en")
                ->setNom("Spare Parts");
        $manager->persist($product43);
        $product43->mergeNewTranslations();
        $product44 = new Produit();
        $product44
                ->setCategory($this->getReference('couches fines'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Mesure d’epaisseur et quartz pour RQCM");
        $product44
                ->translate("en")
                ->setNom("Thickness measurment and quartz");
        $manager->persist($product44);
        $product44->mergeNewTranslations();
        $product45 = new Produit();
        $product45
                ->setCategory($this->getReference('couches fines'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Elements réfractaires");
        $product45
                ->translate("en")
                ->setNom("Refractory Material");
        $manager->persist($product45);
        $product45->mergeNewTranslations();
        $product46 = new Produit();
        $product46
                ->setCategory($this->getReference('couches fines'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Alimentation plasma");
        $product46
                ->translate("en")
                ->setNom("Plasma power supply");
        $manager->persist($product46);
        $product46->mergeNewTranslations();
        $product47 = new Produit();
        $product47
                ->setCategory($this->getReference('optique'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Lentilles");
        $product47
                ->translate("en")
                ->setNom("Lenses");
        $manager->persist($product47);
        $product47->mergeNewTranslations();
        $product48 = new Produit();
        $product48
                ->setCategory($this->getReference('optique'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Prisms");
        $product48
                ->translate("en")
                ->setNom("Prisms");
        $manager->persist($product48);
        $product48->mergeNewTranslations();
        $product49 = new Produit();
        $product49
                ->setCategory($this->getReference('optique'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Mirroirs");
        $product49
                ->translate("en")
                ->setNom("Mirrors");
        $manager->persist($product49);
        $product49->mergeNewTranslations();
        $product50 = new Produit();
        $product50
                ->setCategory($this->getReference('optique'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Séparateur de faisceau");
        $product50
                ->translate("en")
                ->setNom("Beam splitters");
        $manager->persist($product50);
        $product50->mergeNewTranslations();
        $product51 = new Produit();
        $product51
                ->setCategory($this->getReference('optique'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Pièces détachées");
        $product51
                ->translate("en")
                ->setNom("Pieces détachées ");
        $manager->persist($product51);
        $product51->mergeNewTranslations();
        $product52 = new Produit();
        $product52
                ->setCategory($this->getReference('optique'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Filtres optiques");
        $product52
                ->translate("en")
                ->setNom("Optical filters ");
        $manager->persist($product52);
        $product52->mergeNewTranslations();
        $product53 = new Produit();
        $product53
                ->setCategory($this->getReference('optique'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Fenêtres optiques");
        $product53
                ->translate("en")
                ->setNom("Optical windows");
        $manager->persist($product53);
        $product53->mergeNewTranslations();
        $product54 = new Produit();
        $product54
                ->setCategory($this->getReference('microscopie'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Grilles et membranes");
        $product54
                ->translate("en")
                ->setNom("Grids & membranes");
        $manager->persist($product54);
        $product54->mergeNewTranslations();
        $product55 = new Produit();
        $product55
                ->setCategory($this->getReference('microscopie'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Brucelles");
        $product55
                ->translate("en")
                ->setNom("Tweezers");
        $manager->persist($product55);
        $product55->mergeNewTranslations();
        $product56 = new Produit();
        $product56
                ->setCategory($this->getReference('microscopie'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Préparation d’échantillons");
        $product56
                ->translate("en")
                ->setNom("Sample preparation");
        $manager->persist($product56);
        $product56->mergeNewTranslations();
        $product57 = new Produit();
        $product57
                ->setCategory($this->getReference('microscopie'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("SEM & TEM Microscopie");
        $product57
                ->translate("en")
                ->setNom("SEM & TEM Microscopy");
        $manager->persist($product57);
        $product57->mergeNewTranslations();
        $product58 = new Produit();
        $product58
                ->setCategory($this->getReference('microscopie'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Equipements");
        $product58
                ->translate("en")
                ->setNom("Equipments");
        $manager->persist($product58);
        $product58->mergeNewTranslations();
        $product59 = new Produit();
        $product59
                ->setCategory($this->getReference('microscopie'))
                ->setpdf("uploads/")
                ->translate("fr")
                ->setNom("Spectrométrie XPS");
        $product59
                ->translate("en")
                ->setNom("XPS Spectrometry");
        $manager->persist($product59);
        $product59->mergeNewTranslations();
        $manager->flush();
    }
    public function getDependencies(): array {
        return [
            CategoryFixtures::class,
        ];
    }
}