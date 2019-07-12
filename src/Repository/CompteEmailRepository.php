<?php

namespace App\Repository;

use App\Entity\CompteEmail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CompteEmail|null find($id, $lockMode = null, $lockVersion = null)
 * @method CompteEmail|null findOneBy(array $criteria, array $orderBy = null)
 * @method CompteEmail[]    findAll()
 * @method CompteEmail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompteEmailRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CompteEmail::class);
    }

    // /**
    //  * @return CompteEmail[] Returns an array of CompteEmail objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CompteEmail
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
