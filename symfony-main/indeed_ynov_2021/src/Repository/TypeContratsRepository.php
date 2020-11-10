<?php

namespace App\Repository;

use App\Entity\TypeContrats;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeContrats|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeContrats|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeContrats[]    findAll()
 * @method TypeContrats[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeContratsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeContrats::class);
    }

    // /**
    //  * @return TypeContrats[] Returns an array of TypeContrats objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeContrats
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
