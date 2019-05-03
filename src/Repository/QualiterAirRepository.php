<?php

namespace App\Repository;

use App\Entity\QualiterAir;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method QualiterAir|null find($id, $lockMode = null, $lockVersion = null)
 * @method QualiterAir|null findOneBy(array $criteria, array $orderBy = null)
 * @method QualiterAir[]    findAll()
 * @method QualiterAir[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QualiterAirRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, QualiterAir::class);
    }

    // /**
    //  * @return QualiterAir[] Returns an array of QualiterAir objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?QualiterAir
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
