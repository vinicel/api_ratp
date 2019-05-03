<?php

namespace App\Repository;

use App\Entity\TraficAnnuelStationReseauFerre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TraficAnnuelStationReseauFerre|null find($id, $lockMode = null, $lockVersion = null)
 * @method TraficAnnuelStationReseauFerre|null findOneBy(array $criteria, array $orderBy = null)
 * @method TraficAnnuelStationReseauFerre[]    findAll()
 * @method TraficAnnuelStationReseauFerre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TraficAnnuelStationReseauFerreRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TraficAnnuelStationReseauFerre::class);
    }

    // /**
    //  * @return TraficAnnuelStationReseauFerre[] Returns an array of TraficAnnuelStationReseauFerre objects
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
    public function findOneBySomeField($value): ?TraficAnnuelStationReseauFerre
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
