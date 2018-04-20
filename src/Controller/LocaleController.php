<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LocaleController extends Controller
{
    /**
     * @Route("change-locale/{locale}", name="locale")
     */
    public function recupLocale(Request $request, $locale)
    { 
        $request->getSession()->set("_locale", $locale);
        // $uri = $request->query->get('uri');
        return $this->redirectToRoute('home');
    }
}
