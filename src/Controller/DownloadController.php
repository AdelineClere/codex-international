<?php

namespace App\Controller;

use App\Entity\Download;
use App\Form\DownloadType;
use App\Repository\DownloadRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Translation\TranslatorInterface;

class DownloadController extends Controller
{
    /**
     * @Route("/download", name="download")
     */
    public function index(DownloadRepository $DownloadRepo)
    {
        $downloads = $DownloadRepo->getDownload();
        return $this->render('download/download.html.twig', [
            'downloads' => $downloads,
        ]);
    }
    
    /**
     * @Route("admin/dashboard/download", name="download_dashboard")
     */
    public function adminDownload(DownloadRepository $DownloadRepo)
    {
        $downloads = $DownloadRepo->getDownload();
        return $this->render('admin/download_dashboard.html.twig', [
            'downloads' => $downloads,
        ]);
    }
    
    /**
     * @Route("/admin/download/delete/{id}", name="delete_download")
     */
    public function deleteDownload(Download $download, ObjectManager $manager) {
        $manager->remove($download);
        $manager->flush();
        return $this->redirectToRoute('download_dashboard');
    }
    
    /**
     * @Route("/admin/download/Add", name="add_download")
     * @Route("/admin/download/edit/{id}", name="edit_download")
     */
     public function editDownload(ObjectManager $manager, Request $request, Download $download = null)
    {
        if($download === null)
        {
            $download = new Download();
        }
        $formDownload = $this->createForm(DownloadType::class, $download)
            ->add('Envoyer', SubmitType::class);
        
  
        $formDownload->handleRequest($request); 
        
        if($formDownload->isSubmitted() && $formDownload->isValid())
        {
            $download->setPdfKey('download');
            $manager->persist($download);
            $manager->flush();
            return $this->redirectToRoute('download_dashboard');
        }
        
        return $this->render('admin/edit_download.html.twig', [
           'form' => $formDownload->createView() 
        ]);
    }
}

