<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Employe;
use App\Entity\Inscription;
use App\Form\Rechercheinscription;
use App\Repository\InscriptionRepository;

class RechercheController extends AbstractController
{
    #[Route('/recherche', name: 'app_recherche')]
    public function index(): Response
    {
        return $this->render('recherche/index.html.twig', [
            'controller_name' => 'RechercheController',
        ]);
    }

    #[Route('/rechercheFindBy',name:'app_recherche_findBy')]

    public function rechercheFindByAction(ManagerRegistry $doctrine)
    {
        $Employe=$doctrine->getRepository(Employe::Class)->findBy(
            ['nom' => 'Castaing','statut' => 0],['id'=>'ASC'],10,0
        ); 
        return $this->render('recherche/recherche.html.twig', [
            'employe' => $Employe
        ]);
    }

    #[Route('/rechercheinscriptionsdur', name: 'app_recherche_inscriptions')]
    public function rechercheInscriptions(InscriptionRepository $inscriptionRepository): Response
    {
        $inscriptions = $inscriptionRepository->rechInscriptionsEmployeNomPrenom("blabla", "toto");

        return $this->render('recherche/rechercheinscriptions.html.twig', [
            'inscriptions' => $inscriptions
        ]);
    }

    #[Route('/rechercheInscription', name: 'app_recherche_x')]
    public function rechercheInscription(Request $request, InscriptionRepository $inscriptionRepository): Response
    {
        $form = $this->createForm(Rechercheinscription::class);
        $form->handleRequest($request);

        $inscriptions = [];

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $nom = $data['nom'];
            $prenom = $data['prenom'];

            $inscriptions = $inscriptionRepository->rechInscriptionsEmployeNomPrenom($nom, $prenom);
        }

        return $this->render('recherche/rechercheinscriptionx.html.twig', [
            'form' => $form->createView(),
            'inscriptions' => $inscriptions
        ]);
    }
}
