<?php

namespace App\Repository;

use App\Entity\Esperso;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Esperso|null find($id, $lockMode = null, $lockVersion = null)
 * @method Esperso|null findOneBy(array $criteria, array $orderBy = null)
 * @method Esperso[]    findAll()
 * @method Esperso[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EspersoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Esperso::class);
    }

     public function createEspersoQB()
    {
        return $this->createQueryBuilder('esp')
                ->leftJoin('esp.translations', 'espt')
                ->addSelect('espt');
    }
    
    public function findMany() 
    {
        return $this->createEspersoQB()->getQuery()->getResult();
    }
    
    
}

  