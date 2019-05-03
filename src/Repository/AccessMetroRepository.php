<?php

namespace App\Repository;

use App\Entity\AccessMetro;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AccessMetro|null find($id, $lockMode = null, $lockVersion = null)
 * @method AccessMetro|null findOneBy(array $criteria, array $orderBy = null)
 * @method AccessMetro[]    findAll()
 * @method AccessMetro[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccessMetroRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AccessMetro::class);
    }

    // /**
    //  * @return AccessMetro[] Returns an array of AccessMetro objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AccessMetro
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
