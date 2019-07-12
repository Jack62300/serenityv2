<?php

namespace App\Repository;

use App\Entity\OwnedVehicles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method OwnedVehicles|null find($id, $lockMode = null, $lockVersion = null)
 * @method OwnedVehicles|null findOneBy(array $criteria, array $orderBy = null)
 * @method OwnedVehicles[]    findAll()
 * @method OwnedVehicles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OwnedVehiclesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, OwnedVehicles::class);
    }

    public function findBysteam($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.owner = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult()
        ;
    }

    // /**
    //  * @return OwnedVehicles[] Returns an array of OwnedVehicle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OwnedVehicle
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
