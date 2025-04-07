<?php

namespace App\Repository;

use App\Entity\Employe;
use App\Entity\Inscription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Inscription>
 */
class InscriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Inscription::class);
    }

    //    /**
    //     * @return Inscription[] Returns an array of Inscription objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('i')
    //            ->andWhere('i.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('i.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Inscription
    //    {
    //        return $this->createQueryBuilder('i')
    //            ->andWhere('i.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
    public function findOneBySomePrenomNom($prenom, $nom): ?Employe
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
    
    public function rechInscriptionsEmployeNomPrenom($nom,$prenom):array
    {
        return $this->createQueryBuilder('i')
        ->join('i.lemploye','e') //jointure avec l'alias 'e' avec employe
        ->andWhere('e.nom = :val1')
        ->andWhere('e.prenom = :val2')
        ->setParameter('val1',$nom)
        ->setParameter('val2',$prenom)
        ->getQuery()
        ->getResult();
    }
}
