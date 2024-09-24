<?php

namespace App\Repository;

use App\Entity\ORMStudent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ORMStudent|null find($id, $lockMode = null, $lockVersion = null)
 * @method ORMStudent|null findOneBy(array $criteria, array $orderBy = null)
 * @method ORMStudent[] findAll()
 * @method ORMStudent[] findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ORMStudentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ORMStudent::class);
    }
}
