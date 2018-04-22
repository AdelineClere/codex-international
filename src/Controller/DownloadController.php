<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DownloadController extends Controller
{
    /**
     * @Route("/download", name="download")
     */
    public function index()
    {
        return $this->render('download/download.html.twig', [
            'controller_name' => 'DownloadController',
        ]);
    }
}

