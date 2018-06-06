<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture 
{
    public function load(ObjectManager $manager)
    {

//        $category1 = new Category();
//        $category1
//                ->setImage("uploads/boride.jpg")
//                ->setImage2("uploads/silicide.jpg")
//                ->setImage3("uploads/oxyde.jpg");
//        $category1
//                ->translate("fr")
//                
//                ->setTitre('Cibles de pulvérisation')
//                ->setDescription('Notre réseau de partenaires exclusifs nous permet de proposer les meilleures cibles de pulvérisation cathodiques pour vos dépôts de couches minces sous vide.  Les larges variétés de compositions (métaux purs, alliages, composites) et de puretés des cibles Codex International sont disponibles sous les configurations et tailles des principaux fabricants de Bâtis PVD (OEM) : S‐Guns, circulaire, rectangulaire, triangulaire, plane, cylindrique.
//Nos cibles de pulvérisation sont inspectées à tous les stades de la production et subissent un ultime contrôle de composition, taille, forme et dimension dans notre LABORATOIRE avant livraison.
//Nous garantissons une parfaite régularité de la qualité et de la composition des cibles à un coût très optimisé.
//Un certificat d’analyse est fourni dans chaque envoi.');
//        
//        $category1->translate("en")
//                ->setTitre('Sputtering Targets')
//                ->setDescription('Our exclusive network of partners enables us to offer the best cathode sputtering targets for thin film deposition. Codex International sputtering targets are available in a wide variety of compositions (pure metals, alloys, composites), purities and sizes in order to fit with all configurations of the leading manufacturers of PVD equipement (OEM): S-Guns, circular, rectangular, triangular, flat , cylindrical.
//Our sputtering targets are inspected at all stages of production and undergo complete inspection of composition, size, shape and dimension in our LABORATORY before shipment.We guarantee regularity of the quality and composition of the target at a low cost.
//A certificate of analysis is provided with each shipment.');
//                   
//        $manager->persist($category1); 
//        $this->addReference('cibles de pulvérisation', $category1);
//        $category1->mergeNewTranslations();
//        $manager->flush();
//        
//            
//        
//        $category2 = new Category();
//        $category2
//                ->setImage("uploads/boride.jpg")
//                ->setImage2("uploads/silicide.jpg")
//                ->setImage3("uploads/oxyde.jpg");
//        $category2
//                ->translate("fr")
//                
//                ->setTitre('Porte-cibles')
//                ->setDescription('Notre réseau de partenaires exclusifs nous permet de proposer les meilleures cibles de pulvérisation cathodiques pour vos dépôts de couches minces sous vide.  Les larges variétés de compositions (métaux purs, alliages, composites) et de puretés des cibles Codex International sont disponibles sous les configurations et tailles des principaux fabricants de Bâtis PVD (OEM) : S‐Guns, circulaire, rectangulaire, triangulaire, plane, cylindrique.
//Nos cibles de pulvérisation sont inspectées à tous les stades de la production et subissent un ultime contrôle de composition, taille, forme et dimension dans notre LABORATOIRE avant livraison.
//Nous garantissons une parfaite régularité de la qualité et de la composition des cibles à un coût très optimisé.
//Un certificat d’analyse est fourni dans chaque envoi.');
//        
//        $category2->translate("en")
//                ->setTitre('Backing plates')
//                ->setDescription('Our exclusive network of partners enables us to offer the best cathode sputtering targets for thin film deposition. Codex International sputtering targets are available in a wide variety of compositions (pure metals, alloys, composites), purities and sizes in order to fit with all configurations of the leading manufacturers of PVD equipement (OEM): S-Guns, circular, rectangular, triangular, flat , cylindrical.
//Our sputtering targets are inspected at all stages of production and undergo complete inspection of composition, size, shape and dimension in our LABORATORY before shipment.We guarantee regularity of the quality and composition of the target at a low cost.
//A certificate of analysis is provided with each shipment.');
//                   
//        $manager->persist($category2); 
//        $this->addReference('porte-cibles', $category2);
//        $category2->mergeNewTranslations();
//        $manager->flush();
//        
//            
//        
//        $category3 = new Category();
//
//        $category3
//                ->setImage("uploads/img_categ/evaporation/metauxpurs.jpg")
//                ->setImage2("uploads/img_categ/evaporation/arsenides.jpg")
//                ->setImage3("uploads/img_categ/evaporation/metauxprecieux.jpg");
//        $category3
//                ->translate("fr")
//                ->setTitre('Matériaux d\'évaporation')
//                ->setDescription('Codex International élabore, met en forme et fournit une gamme complète de matériaux pour la PVD.
//Matériaux inorganique de l\'Aluminium au Zirconium,
//Une large granulométrie : des nanopoudres à 12mm,
//Des puretés disponibles jusqu\'à 7N selon les matériaux.
//Tous composés : cliquez pour télécharger le PDF du composé choisit
//Tous nos matériaux sont livrés avec son certificat d’analyse spécifique.');
//        
//        $category3->translate("en")
//                ->setTitre('Evaporation material')
//                ->setDescription('Our exclusive network of partners enables us to offer the best cathode sputtering targets for thin film deposition. Codex International sputtering targets are available in a wide variety of compositions (pure metals, alloys, composites), purities and sizes in order to fit with all configurations of the leading manufacturers of PVD equipement (OEM): S-Guns, circular, rectangular, triangular, flat, cylindrical.
//Our sputtering targets are inspected at all stages of production and undergo complete inspection of composition, size, shape and dimension in our LABORATORY before shipment.We guarantee regularity of the quality and composition of the target at a low cost.
//A certificate of analysis is provided with each shipment.');
//        $manager->persist($category3);  
//        $this->addReference('materiaux d\'evaporation', $category3);
//        $category3->mergeNewTranslations(); 
//        $manager->flush(); 
//        
//       
//        
//        $category4 = new Category();
//
//        $category4
//                ->setImage("uploads/boride.jpg")
//                ->setImage2("uploads/silicide.jpg")
//                ->setImage3("uploads/oxyde.jpg");
//        $category4
//                ->translate("fr")
//                ->setTitre('Fils, Feuilles, Plaques')
//                ->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  Fils, feuilles, plaques');
//        
//        $category4->translate("en")
//                ->setTitre('Wires Foils Plates')
//                ->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  Wires Foils Plates');
//        $manager->persist($category4);  
//        $this->addReference('fils feuilles plaques', $category4);
//        $category4->mergeNewTranslations(); 
//        $manager->flush(); 
//        
//        
//        
//        $category5 = new Category();
//
//        $category5
//                ->setImage("uploads/boride.jpg")
//                ->setImage2("uploads/silicide.jpg")
//                ->setImage3("uploads/oxyde.jpg");
//        $category5
//                ->translate("fr")
//                ->setTitre('Métaux précieux')
//                ->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  Métaux précieux');
//        
//        $category5->translate("en")
//                ->setTitre('Precious Metal')
//                ->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  Precious Metal');
//        $manager->persist($category5);  
//        $this->addReference('metaux precieux', $category5);
//        $category5->mergeNewTranslations(); 
//        $manager->flush(); 
        
        
        $category1 = new Category();

        $category1
                ->setImage("uploads/boride.jpg")
                ->setImage2("uploads/silicide.jpg")
                ->setImage3("uploads/oxyde.jpg");
        $category1
                ->translate("fr")
                ->setTitre('Matériaux')
                ->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  Substrats');
        
        $category1->translate("en")
                ->setTitre('Materials')
                ->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  Wafer');
        $manager->persist($category1);  
        $this->addReference('materiaux', $category1);
        $category1->mergeNewTranslations(); 
        $manager->flush(); 
        
        
        
        $category2 = new Category();

        $category2
                ->setImage("uploads/boride.jpg")
                ->setImage2("uploads/silicide.jpg")
                ->setImage3("uploads/oxyde.jpg");
        $category2
                ->translate("fr")
                ->setTitre('Substrats')
                ->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  Substrats');
        
        $category2->translate("en")
                ->setTitre('Wafers')
                ->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  Wafer');
        $manager->persist($category2);  
        $this->addReference('substrats', $category2);
        $category2->mergeNewTranslations(); 
        $manager->flush(); 
        
        
        
        $category3 = new Category();

        $category3
                ->setImage("uploads/boride.jpg")
                ->setImage2("uploads/silicide.jpg")
                ->setImage3("uploads/oxyde.jpg");
        $category3
                ->translate("fr")
                ->setTitre('Services')
                ->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  Services');
        
        $category3->translate("en")
                ->setTitre('Services')
                ->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  Services');
        $manager->persist($category3);  
        $this->addReference('services', $category3);
        $category3->mergeNewTranslations(); 
        $manager->flush(); 
        
        
        
        $category4 = new Category();

        $category4
                ->setImage("uploads/boride.jpg")
                ->setImage2("uploads/silicide.jpg")
                ->setImage3("uploads/oxyde.jpg");
        $category4
                ->translate("fr")
                ->setTitre('Instrumentation')
                ->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  Pompe à vide');
        
        $category4->translate("en")
                ->setTitre('Instrumentation')
                ->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  Vacuum Pomp');
        $manager->persist($category4);  
        $this->addReference('instrumentation', $category4);
        $category4->mergeNewTranslations(); 
        $manager->flush(); 
        
        
        
        $category5 = new Category();

        $category5
                ->setImage("uploads/boride.jpg")
                ->setImage2("uploads/silicide.jpg")
                ->setImage3("uploads/oxyde.jpg");
        $category5
                ->translate("fr")
                ->setTitre('Consommables')
                ->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  Couches minces');
        
        $category5->translate("en")
                ->setTitre('Vacuum consumables')
                ->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  Thin Film');
        $manager->persist($category5);  
        $this->addReference('consommables', $category5);
        $category5->mergeNewTranslations(); 
        $manager->flush(); 
        
        
        
        $category6 = new Category();

        $category6
                ->setImage("uploads/boride.jpg")
                ->setImage2("uploads/silicide.jpg")
                ->setImage3("uploads/oxyde.jpg");
        $category6
                ->translate("fr")
                ->setTitre('Optique')
                ->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  Optique');
        
        $category6->translate("en")
                ->setTitre('Optics')
                ->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  Optic');
        $manager->persist($category6);  
        $this->addReference('optique', $category6);
        $category6->mergeNewTranslations(); 
        $manager->flush(); 
        
        
        
        $category7 = new Category();

        $category7
                ->setImage("uploads/boride.jpg")
                ->setImage2("uploads/silicide.jpg")
                ->setImage3("uploads/oxyde.jpg");
        $category7
                ->translate("fr")
                ->setTitre('Organic Electronics')
                ->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  Microscopie');
        
        $category7->translate("en")
                ->setTitre('Organic Electronics')
                ->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  Microscopy');
        $manager->persist($category7);  
        $this->addReference('organic electronics', $category7);
        $category7->mergeNewTranslations(); 
        $manager->flush(); 
        
        
                
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    }

    
}
