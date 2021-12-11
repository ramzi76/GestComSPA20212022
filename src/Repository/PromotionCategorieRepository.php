<?php

namespace App\Repository;

use App\Entity\PromotionCategorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PromotionCategorie|null find($id, $lockMode = null, $lockVersion = null)
 * @method PromotionCategorie|null findOneBy(array $criteria, array $orderBy = null)
 * @method PromotionCategorie[]    findAll()
 * @method PromotionCategorie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PromotionCategorieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PromotionCategorie::class);
    }

    // /**
    //  * @return PromotionCategorie[] Returns an array of PromotionCategorie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PromotionCategorie
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
