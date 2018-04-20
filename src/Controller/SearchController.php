<?php

namespace App\Controller;

use App\Repository\ProduitTranslationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends Controller
{
    /**
     * @Route("/search", name="search")
     */
    public function index(ProduitTranslationRepository $ProduitRepo, Request $request)
    {
        $productFound = $ProduitRepo->findAllByProduit($request->query->get('form'));
        return $this->render('search/search.html.twig', [
            'productFound' => $productFound,
        ]);
    }
}
