<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends Controller
{
    /**
     * @Route("admin/product_dashboard", name="product_dashboard")
     * @Route("admin/product_dashboard/{page}", name="product_paginated", requirements={"page":"\d+"})
     */
    public function index(ProduitRepository $ProduitRepo)
    {

        $produitList = $ProduitRepo ->findAll();
        return $this->render('admin/product_dashboard.html.twig', ['produits' => $produitList]);
    }

    
    /**
     * @Route("/admin/product/delete/{id}", name="delete_produit")
     */
    
    public function deleteProduit(Produit $produit, ObjectManager $manager)
    {
        $manager->remove($produit);
        $manager->flush();
        return $this->redirectToRoute('product_dashboard');
    }
    
    /**
     * @Route("/admin/produit/add", name="add_produit")
     * @Route("/admin/produit/edit/{id}", name="edit_produit")
     */
    
    public function editProduit(ObjectManager $manager, Request $request, Produit $produit = null)
    {
        if($produit === null)
        {
            $produit = new Produit();
        }
        $formProd = $this->createForm(ProduitType::class, $produit)
            ->add('Envoyer', SubmitType::class);
        
        // ... todo: validation du formulaire;
        $formProd->handleRequest($request); // déclenche la gestion du formulaire;
        
        if($formProd->isSubmitted() && $formProd->isValid())
        {
            $manager->persist($produit);
            $manager->flush();
            return $this->redirectToRoute('product_dashboard');
        }
        
        return $this->render('admin/edit_produit.html.twig', [
           'form' => $formProd->createView() 
        ]);
        
    }
}
