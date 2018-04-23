<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $admin = new User();
        $admin->setNom('Seguier');
        $admin->setPrenom('Stephane');
        $admin->setSociete('Codex International');
        $admin->setEmail('admin@fake.fr');
        $admin->setTelephone('0612345678');
        $admin->setCumulCommande('0');
        $admin->setRoles('ROLE_USER|ROLE_ADMIN');
        $admin->setPassword(password_hash('admin', PASSWORD_BCRYPT));
        $manager->persist($admin);
        $manager->flush();
        
        $admin = new User();
        $admin->setNom('Clere');
        $admin->setPrenom('Adeline');
        $admin->setSociete('WF3');
        $admin->setEmail('adeline@clere.me');
        $admin->setTelephone('0662299584');
        $admin->setCumulCommande('0');
        $admin->setRoles('ROLE_USER|ROLE_ADMIN');
        $admin->setPassword(password_hash('adeline', PASSWORD_BCRYPT));
        $manager->persist($admin);
        $manager->flush();
        
        $admin = new User();
        $admin->setNom('Chateaureynaud');
        $admin->setPrenom('Quentin');
        $admin->setSociete('WF3');
        $admin->setEmail('quentin78480@yahoo.fr');
        $admin->setTelephone('0658957240');
        $admin->setCumulCommande('0');
        $admin->setRoles('ROLE_USER|ROLE_ADMIN');
        $admin->setPassword(password_hash('quentin', PASSWORD_BCRYPT));
        $manager->persist($admin);
        $manager->flush();
        
        $admin = new User();
        $admin->setNom('Ducret');
        $admin->setPrenom('none');
        $admin->setSociete('Alliance concep');
        $admin->setEmail('gducret@alliance-concept.com');
        $admin->setTelephone('none');
        $admin->setCumulCommande('0');
        $admin->setRoles('ROLE_USER');
        $admin->setPassword(password_hash('AllianceDucretAdminPass', PASSWORD_BCRYPT));
        $manager->persist($admin);
        $manager->flush();
        
        $admin = new User();
        $admin->setNom('Emieux');
        $admin->setPrenom('none');
        $admin->setSociete('CEA');
        $admin->setEmail('femieux@cea.fr');
        $admin->setTelephone('none');
        $admin->setCumulCommande('0');
        $admin->setRoles('ROLE_USER');
        $admin->setPassword(password_hash('CEApassEmFr', PASSWORD_BCRYPT));
        $manager->persist($admin);
        $manager->flush();
    }
}
