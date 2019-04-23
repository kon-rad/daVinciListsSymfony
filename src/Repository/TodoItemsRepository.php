<?php

namespace App\Repository;

use App\Entity\TodoItems;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TodoItems|null find($id, $lockMode = null, $lockVersion = null)
 * @method TodoItems|null findOneBy(array $criteria, array $orderBy = null)
 * @method TodoItems[]    findAll()
 * @method TodoItems[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TodoItemsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TodoItems::class);
    }

    // /**
    //  * @return TodoItems[] Returns an array of TodoItems objects
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
    public function findOneBySomeField($value): ?TodoItems
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
