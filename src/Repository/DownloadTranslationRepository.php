<?php

namespace App\Repository;

use App\Entity\DownloadTranslation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DownloadTranslation|null find($id, $lockMode = null, $lockVersion = null)
 * @method DownloadTranslation|null findOneBy(array $criteria, array $orderBy = null)
 * @method DownloadTranslation[]    findAll()
 * @method DownloadTranslation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DownloadTranslationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DownloadTranslation::class);
    }

//    /**
//     * @return DownloadTranslation[] Returns an array of DownloadTranslation objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DownloadTranslation
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
