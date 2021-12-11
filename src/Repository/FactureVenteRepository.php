<?php

namespace App\Repository;

use App\Entity\FactureVente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FactureVente|null find($id, $lockMode = null, $lockVersion = null)
 * @method FactureVente|null findOneBy(array $criteria, array $orderBy = null)
 * @method FactureVente[]    findAll()
 * @method FactureVente[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FactureVenteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FactureVente::class);
    }

    // /**
    //  * @return FactureVente[] Returns an array of FactureVente objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FactureVente
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
