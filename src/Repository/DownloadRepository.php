<?php

namespace App\Repository;

use App\Entity\Download;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Download|null find($id, $lockMode = null, $lockVersion = null)
 * @method Download|null findOneBy(array $criteria, array $orderBy = null)
 * @method Download[]    findAll()
 * @method Download[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DownloadRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Download::class);
    }
    
    
    
    public function getStock() {
        return $this->createQueryBuilder('d')
                ->where('d.pdf_key = :stock ')
                ->setParameter('stock', 'stock')
                ->getQuery()
                ->getResult(); 
    }

   public function getDownload() {
        return $this->findDownload()
                ->getQuery()
                ->getResult(); 
    }
    
    public function findDownload() {
        return $this->createQueryBuilder('d')
                ->innerJoin('d.translations', 'dtr')
                ->where('d.pdf_key = :download ')
                ->setParameter('download', 'download')
                ->leftJoin('d.translations', 'dt')
                ->addSelect('dt'); 
    }
    
    
    
    

//    /**
//     * @return Download[] Returns an array of Download objects
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
    public function findOneBySomeField($value): ?Download
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
