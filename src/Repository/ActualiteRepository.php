<?php

namespace App\Repository;

use App\Entity\Actualite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Actualite>
 */
class ActualiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Actualite::class);
    }

    // public function findLastFour(): array
    // {
    //     return $this->createQueryBuilder('a')
    //         ->where('a.dejapublier = true')
    //         ->orderBy('a.publierle', 'DESC')
    //         ->setMaxResults(4)
    //         ->getQuery()
    //         ->getResult();
    // }

    public function AfficherQuatreDernieresActualites(): array
    {
        return $this->createQueryBuilder('actualite')
                    ->where('actualite.dejapublier = true')
                    ->orderBy('actualite.publierle', 'DESC')
                    ->setMaxResults(4)
                    ->getQuery()
                    ->getResult();
    }

  

//    /**
//     * @return Actualite[] Returns an array of Actualite objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Actualite
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
