<?php

namespace App\Repository;

use App\Entity\Sanitaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Sanitaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sanitaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sanitaire[]    findAll()
 * @method Sanitaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SanitaireRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Sanitaire::class);
    }

    // /**
    //  * @return Sanitaire[] Returns an array of Sanitaire objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Sanitaire
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
