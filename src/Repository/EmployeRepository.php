<?php

namespace App\Repository;

use App\Entity\Employe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Employe>
 */
class EmployeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Employe::class);
    }

    //    /**
    //     * @return Employe[] Returns an array of Employe objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('e.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Employe
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

    public function findOneBySomeLoginMdp($login, $mdpClair): ?Employe
    {   
        $emp = NULL;
        $emp = $this->createQueryBuilder('e')
            ->andWhere('e.login = :login')
            ->andWhere('e.mdp = :mdp')
            ->setParameter('login', $login)
            ->setParameter('mdp', $mdpClair)
            ->getQuery()
            ->getOneOrNullResult();
        return $emp;
    }

    public function findOneBySomeNomPrenom($nom, $prenom): ?Employe
    {   
        $emp = NULL;
        $emp = $this->createQueryBuilder('e')
            ->andWhere('e.nom = :nom')
            ->andWhere('e.prenom = :prenom')
            ->setParameter('nom', $nom)
            ->setParameter('prenom', $prenom)
            ->getQuery()
            ->getOneOrNullResult();
        return $emp;
    }
}
