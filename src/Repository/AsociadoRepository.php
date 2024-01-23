<?php

namespace App\Repository;

use App\Entity\Asociado;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Asociado>
 *
 * @method Asociado|null find($id, $lockMode = null, $lockVersion = null)
 * @method Asociado|null findOneBy(array $criteria, array $orderBy = null)
 * @method Asociado[]    findAll()
 * @method Asociado[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AsociadoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Asociado::class);
    }

//    /**
//     * @return Asociado[] Returns an array of Asociado objects
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

//    public function findOneBySomeField($value): ?Asociado
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
