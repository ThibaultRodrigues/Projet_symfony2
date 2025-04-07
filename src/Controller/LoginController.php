<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Form\EmployeType;
use App\Entity\Employe;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function employeConnexion(Request $request, ManagerRegistry $doctrine,$emp=null): Response
    {
       if ($emp==null){
        $emp = new Employe();
       }
       $form = $this->createForm(EmployeType::class,$emp);
       $form->handleRequest($request);
       if ($form->isSubmitted() && $form->isValid()){ 
        $mdp = (MD5($emp->getMdp().'15'));
        $login = $emp->getLogin();
        $employe = $doctrine->getRepository(Employe::class)->findOneBySomeLoginMdp($login,$mdp);
        if ($employe){
            $session = new Session();
            $session -> set('employeId',$employe->getId());
            $session -> set('statut',$employe -> getStatut());
            if ($employe->getStatut()==1){
                return $this->redirectToRoute('app_aff_formation');
            } else {
                return $this->redirectToRoute('app_aff_formationemp');
                }
            }
        }  
    return $this->render('login/formulaire.html.twig',array('form'=>$form->createView()));
    }
}