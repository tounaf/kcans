<?php

namespace App\Repository;

use App\Entity\TypeSite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeSite|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeSite|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeSite[]    findAll()
 * @method TypeSite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeSiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeSite::class);
    }

    // /**
    //  * @return TypeSite[] Returns an array of TypeSite objects
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
    public function findOneBySomeField($value): ?TypeSite
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
