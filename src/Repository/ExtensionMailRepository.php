<?php

namespace App\Repository;

use App\Entity\ExtensionMail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ExtensionMail|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExtensionMail|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExtensionMail[]    findAll()
 * @method ExtensionMail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExtensionMailRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ExtensionMail::class);
    }

    // /**
    //  * @return ExtensionMail[] Returns an array of ExtensionMail objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ExtensionMail
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
