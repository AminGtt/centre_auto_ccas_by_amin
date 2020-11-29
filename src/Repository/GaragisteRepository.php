<?php

namespace App\Repository;

use App\Entity\Garagiste;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Garagiste|null find($id, $lockMode = null, $lockVersion = null)
 * @method Garagiste|null findOneBy(array $criteria, array $orderBy = null)
 * @method Garagiste[]    findAll()
 * @method Garagiste[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GaragisteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Garagiste::class);
    }

    // /**
    //  * @return Garagiste[] Returns an array of Garagiste objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Garagiste
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
