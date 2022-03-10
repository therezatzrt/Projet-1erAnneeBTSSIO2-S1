<?php

namespace App\Repository;

use App\Entity\Lampadaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Lampadaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lampadaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lampadaire[]    findAll()
 * @method Lampadaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LampadaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lampadaire::class);
    }

    // /**
    //  * @return Lampadaire[] Returns an array of Lampadaire objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Lampadaire
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
