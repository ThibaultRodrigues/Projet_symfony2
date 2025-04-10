<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\FormType;
use App\Form\ProduitType;
use App\Form\InscriptionType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Entity\Formation;
use App\Entity\Employe;
use App\Entity\Inscription;
use App\Entity\Produit;
use Doctrine\Persistence\ManagerRegistry;

class FormationController extends AbstractController
{


    #[Route('/formation', name: 'app_formation')]
    public function index(): Response
    {
        return $this->render('formation/index.html.twig', [
            'controller_name' => 'FormationController',
        ]);
    }

    #[Route('/afficheLesFormations',name:'app_aff_formation')]
    public function afficheLesFormationsAction(ManagerRegistry $doctrine)
    {
        $formation = $doctrine->getManager()->getRepository(Formation::class)->findall();
        if (!$formation)
        {
            $message = "Pas de formations";
        }
        else
        {
            $message = Null;
        }
        return $this->render('formation/listeformations.html.twig', array('ensFormations' => $formation,'message'=>$message));
    }

    #[Route('/afficheLesFormationsEmp',name:'app_aff_formationemp')]
    public function afficheLesFormationsEmpAction(Session $session, ManagerRegistry $doctrine)
    {
        $entityManager = $doctrine->getManager();
        $formation = $entityManager->getRepository(Formation::class)->findAll();

        $employeId = $session->get('employeId');
        $inscription = null;

        if ($employeId) {
            $inscription = $entityManager->getRepository(Inscription::class)->findOneBy([
                'lemploye' => $employeId
            ]);
            $employe = $entityManager->getRepository(Employe::class)->find($employeId);
        }
        

        $message = $formation ? null : "Pas de formations";

        return $this->render('formation/listeformationsEmp.html.twig', [
            'ensFormations' => $formation,
            'message' => $message,
            'employe' => $employe
        ]);
    }


    #[Route('/DejaInscrit/{id}', name: 'app_attention')]
    public function DejaInscritEmpAction($id, Session $session, ManagerRegistry $doctrine): Response
    {
        $employeId = $session->get('employeId');

        if (!$employeId) {
            return $this->redirectToRoute('app_login'); // Redirige si pas connecté
        }

        $entityManager = $doctrine->getManager();
        $inscriptionRepo = $entityManager->getRepository(Inscription::class);

        // Vérifie si l'employé est déjà inscrit à cette formation
        $inscrit = $inscriptionRepo->findOneBy([
            'lemploye' => $employeId,
            'laFormation' => $id
        ]);

        if ($inscrit) {
            return $this->render('formation/DejaInscrit.html.twig');
        }

        return $this->redirectToRoute('app_inscription_formation', ['id' => $id]);
        
    }

    #[Route('/suppFormation/{id}',name : 'app_formation_sup')]
    public function suppFormationAction($id, ManagerRegistry $doctrine)
    {
        $formation = $doctrine->getManager()->getRepository(Formation::class)->find($id);
        $entityManager = $doctrine -> getManager();
        $entityManager -> remove($formation);
        $entityManager -> flush();
        return $this->redirectToRoute('app_aff_formation');
    }


    #[Route('/ajoutFormation',name:'app_ajout_formation')]
    public function ajoutFormationAction(Request $request,ManagerRegistry $doctrine, $formation = null)
    {
        if ($formation == null){
            $formation = new Formation();
        }
        $form = $this->createForm(FormType::class,$formation);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $doctrine->getManager();
            $em->persist($formation);
            $em->flush();
            return $this->redirectToRoute("app_aff_formation");
        }

        return $this->render('formation/editer.html.twig',array('form'=>$form->createView()));
    }

    #[Route('/ajoutProduit',name:'app_ajout_produit')]
    public function ajoutproduitAction(Request $request,ManagerRegistry $doctrine, $produit = null)
    {
        if ($produit == null){
            $produit = new Produit();
        }
        $form = $this->createForm(ProduitType::class,$produit);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $doctrine->getManager();
            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute("app_aff_formation");
        }

        return $this->render('formation/editer.html.twig',array('form'=>$form->createView()));
    }

    #[Route('/inscription/{id}', name: 'app_inscription_formation')]
    public function inscriptionformationAction($id, Session $session,ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $formation = $entityManager->getRepository(Formation::class)->find($id);
        $employeId = $session->get('employeId');
        $employe = $doctrine->getRepository(Employe::class)->find($employeId);

        if (!$formation) {
            return $this->redirectToRoute('formation/listeformationsEmp.html.twig');
        }
    
        $inscription = new Inscription();
        $inscription->setLemploye($employe);
        $inscription->setLaFormation($formation);
        $inscription->setStatut('En cours');
    
        $entityManager->persist($inscription);
        $entityManager->flush();
    
        return $this->redirectToRoute('app_aff_formationemp');
    }

    #[Route('/afficheLesvalidations', name: 'app_aff_validations')]
    public function afficheLesValidationsAction(ManagerRegistry $doctrine)
    {
        $inscription = $doctrine->getManager()->getRepository(Inscription::class)
            ->createQueryBuilder('i')
            ->where('i.statut != :validee')
            ->andWhere('i.statut != :refusee')
            ->setParameter('validee', 'validee')
            ->setParameter('refusee', 'refusee')
            ->getQuery()
            ->getResult();


        if (!$inscription) {
            $message = "Pas de formations";
        } else {
            $message = null;
        }

        return $this->render('inscription/ListeValidation.html.twig', ['ensFormations' => $inscription,'message' => $message,]);
    }


    #[Route('/validerinscription/{id}', name: 'app_validerinscription')]
    public function ValiderformationAction($id, ManagerRegistry $doctrine): Response
    {
        $inscription = $doctrine->getManager()->getRepository(Inscription::class)->find($id);
        $inscription->setStatut('validee');
        
        $entityManager = $doctrine->getManager();
        $entityManager->flush();

        return $this->redirectToRoute('app_aff_validations');
    }

    #[Route('/refuserinscription/{id}', name: 'app_refuserinscription')]
    public function RefuserformationAction($id, ManagerRegistry $doctrine): Response
    {
        $inscription = $doctrine->getManager()->getRepository(Inscription::class)->find($id);
        $inscription->setStatut('refusee');
        
        $entityManager = $doctrine->getManager();
        $entityManager->flush();

        return $this->redirectToRoute('app_aff_validations');
    }

    #[Route('/afficheLesFormationsvalidations/{id}', name: 'app_aff_valider')]
public function afficheLesFormationsValiderAction(Session $session, ManagerRegistry $doctrine)
{
    $entityManager = $doctrine->getManager();
    $employeId = $session->get('employeId');

    if (!$employeId) {
        return $this->redirectToRoute('app_login'); // Redirige si l'utilisateur n'est pas connecté
    }

    $employe = $entityManager->getRepository(Employe::class)->find($employeId);

    // Récupérer uniquement les inscriptions de l'employé connecté qui sont validées ou refusées
    $inscriptions = $entityManager->getRepository(Inscription::class)
        ->createQueryBuilder('i')
        ->where('i.lemploye = :employe')
        ->andWhere('i.statut = :validee OR i.statut = :refusee')
        ->setParameter('employe', $employe)
        ->setParameter('validee', 'validee')
        ->setParameter('refusee', 'refusee')
        ->getQuery()
        ->getResult();

        $message = count($inscriptions) ? null : "Aucune formation validée ou refusée pour cet employé.";

        return $this->render('inscription/ListeValiderEmp.html.twig', [
            'ensFormations' => $inscriptions,
            'message' => $message,
            'employe' => $employe
        ]);
    }
    
   
}    