<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryTranslationController extends Controller
{
    /**
     * @Route("/category/translation", name="category_translation")
     */
    public function index()
    {
        return $this->render('category_translation/index.html.twig', [
            'controller_name' => 'CategoryTranslationController',
        ]);
    }
}
