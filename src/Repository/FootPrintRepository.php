<?php

namespace App\Repository;

use App\Entity\FootPrint;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FootPrint|null find($id, $lockMode = null, $lockVersion = null)
 * @method FootPrint|null findOneBy(array $criteria, array $orderBy = null)
 * @method FootPrint[]    findAll()
 * @method FootPrint[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FootPrintRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FootPrint::class);
    }

    // /**
    //  * @return FootPrint[] Returns an array of FootPrint objects
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
    public function findOneBySomeField($value): ?FootPrint
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
