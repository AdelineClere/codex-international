<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

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
}
