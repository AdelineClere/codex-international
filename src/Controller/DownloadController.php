<?php

namespace App\Controller;

use App\Repository\DownloadRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DownloadController extends Controller
{
    /**
     * @Route("/download", name="download")
     */
    public function index(DownloadRepository $DownloadRepo)
    {
        $downloads = $DownloadRepo->getDowload();
        return $this->render('download/download.html.twig', [
            'downloads' => $downloads,
        ]);
    }
}

