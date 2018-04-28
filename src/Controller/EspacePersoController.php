<?php

namespace App\Controller;

use App\Entity\Esperso;
use App\Form\EspersoType;
use App\Repository\EspersoRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EspacePersoController extends Controller
{
    /**
     * @Route("/espace/perso", name="espace_perso") 
     */
    public function index(UserRepository $UserRepo, Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $fidelite = $UserRepo->cumul_commande($this->getUser());
        return $this->render('espace_perso/espace_perso.html.twig', [
            'fidelite' => $fidelite,
        ]);
    }
    
    // RAJOUTÉ POUR CRÉER ADMIN ESPACE PERSO
    
    /**
     * @Route("admin/dashboard_esperso", name="esperso_dashboard")
     */
    public function showEspersoAdmin(EspersoRepository $espersoRepo)
    {
        $espersoList = $espersoRepo ->findMany();
        return $this->render('admin/backoffice_espace_perso.html.twig', ['espersos' => $espersoList]);
    }
    
    /**
     * @Route("/admin/esperso/delete/{id}", name="delete_esperso")
     */
    
    public function deleteEsperso($id, ObjectManager $manager, EspersoRepository $espersoRepo)
    {
        $article = $espersoRepo->find($id);
        $manager->remove($article);
        $manager->flush();
        return $this->redirectToRoute('esperso_dashboard');
    }
    
    
    /**
     * @Route("/admin/esperso/add", name="add_esperso")
     * @Route("/admin/esperso/edit/{id}", name="edit_esperso")
     */
    
    public function editEsperso(ObjectManager $manager, Request $request, Esperso $article = null)
    {
        if($article === null)
        {
            $article = new Esperso();
        }
        $formEsperso = $this->createForm(EspersoType::class, $article)
            ->add('Envoyer', SubmitType::class);
        
  
        $formEsperso->handleRequest($request); 
        
        if($formEsperso->isSubmitted() && $formEsperso->isValid())
        {
            $manager->persist($article);
            $manager->flush();
            return $this->redirectToRoute('esperso_dashboard');
        }
        
        return $this->render('admin/edit_espace_perso.html.twig', [
           'form' => $formEsperso->createView() 
        ]);
    }
    
    
    
    
    
    
    
    
    
    
}
