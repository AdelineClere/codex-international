<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
    /**
     * @Route("/", name="root")
     */
    public function root()
    {
        return $this->redirectToRoute('espace_perso');
    }
    
    /**
     * 
     * @Route("/home", name="home")
     */
    public function index(Request $request)
    {
        $locale = $request->getLocale();
        return $this->render('home/index.html.twig', [
            'locale' => $locale,
        ]);
    }
}
