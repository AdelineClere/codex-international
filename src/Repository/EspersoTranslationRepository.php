<?php

namespace App\Repository;

use App\Entity\EspersoTranslation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method EspersoTranslation|null find($id, $lockMode = null, $lockVersion = null)
 * @method EspersoTranslation|null findOneBy(array $criteria, array $orderBy = null)
 * @method EspersoTranslation[]    findAll()
 * @method EspersoTranslation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EspersoTranslationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, EspersoTranslation::class);
    }


    
    
}
