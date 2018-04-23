<?php

namespace App\Repository;

use App\Entity\Category;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Category|null find($id, $lockMode = null, $lockVersion = null)
 * @method Category|null findOneBy(array $criteria, array $orderBy = null)
 * @method Category[]    findAll()
 * @method Category[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Category::class);
    }
    public function findCategoryBySlug($slug, $locale)
    {
        return $this->qb($locale)
                ->andWhere('ct.slug = :slug ')
                ->setParameter('slug', $slug)
                ->getQuery()
                ->getOneOrNullResult();   
    }
    
    public function findMany()
    {
        return $this->createQueryBuilder('c')
                ->leftJoin('c.translations', 'ct')
                ->addSelect('ct')
                ->getQuery()->getResult();
    }
    
    public function getCategoriesWithTranslations() {
        return $this->createQueryBuilder('c')
                ->leftJoin('c.translations', 'ct')
                ->addSelect('ct')
                ->getQuery()
                ->getResult();
    }
    
    public function qb($locale) {
        return $this->createQueryBuilder('c')
                ->leftJoin('c.translations', 'ct')
                ->addSelect('ct')
                ->where('ct.locale = :locale')
                ->setParameter('locale', $locale);
    }
    

//    /**
//     * @return Category[] Returns an array of Category objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Category
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
