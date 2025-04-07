<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Employe;
use App\Entity\Inscription;
use App\Entity\Formation;
use App\Form\InscriptionType;
use Doctrine\Persistence\ManagerRegistry;

class InscriptionController extends AbstractController
{
    #[Route('/inscription', name: 'app_inscription')]
    public function index(): Response
    {
        return $this->render('inscription/index.html.twig', [
            'controller_name' => 'InscriptionController',
        ]);
    }
    #[Route('/inscription_emp/{nom}_{prenom}',name: 'Employe_inscri')]
    public function findOneBySomePrenomNomAction($nom,$prenom, ManagerRegistry $doctrine)
        {
        $employe = $doctrine->getManager()->getRepository(Employe::class)->findall($nom,$prenom);
        foreach($employe as $emp)
        {
            echo "Nom de L'employé : ".$emp->getNom();
            echo "Prénom de l'employé : ".$emp->getPrenom();            
            echo '<br>';
        }
            return $this ->render('inscription/index.html.twig',[
            'controller_name'=>'InscriptionController',]);
        }
}
