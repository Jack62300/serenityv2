<?php

namespace App\Repository;

use App\Entity\SanctionJ;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SanctionJ|null find($id, $lockMode = null, $lockVersion = null)
 * @method SanctionJ|null findOneBy(array $criteria, array $orderBy = null)
 * @method SanctionJ[]    findAll()
 * @method SanctionJ[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SanctionJRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SanctionJ::class);
    }

    public function findBysteam($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.steamHex = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult()
        ;
    }


    // /**
    //  * @return SanctionJ[] Returns an array of SanctionJ objects
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
    public function findOneBySomeField($value): ?SanctionJ
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
