<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\DownloadRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends Controller {
    /**
     * //@Route("/contact", name="contact")
     */
    /*
      public function index(StockRepository $stockRepo)
      {
      $contact = new Contact();
      //traitement de l'affichage du seul lien pdf de STOCK ENTITY
      $stock=$stockRepo->findAll();
      //traitement de l'affichage du formulaire de contact
      $formContact=$this->createForm(ContactType::class, $contact)
      ->add('Envoyer', SubmitType::class);


      if( $formContact->isSubmitted() && $formContact->isValid() )
      {

      /*---------------ENVOI DU MESSAGE-------------------------

      $headers = "From: ".$contact->email." \r\n";
      $headers .= "MIME-Version: 1.0 \r\n";
      $headers .="Content-type: text/html; charset=utf-8 \r\n";

      $message  =  "Nom: " . $contact->nom. "\nPrénom : " . $contact->prenom . "\nSociété : " . $contact->societe . "\nMessage : " .$contact->message;

      $email="stephane.seguier@codex-international.com";
      ($email,$contact->sujet,$message,$headers);

      // mail( qui va recevoir le message ? , objet ? , message ? , qui envoie le message ? );
      //*--------------FIN D ENVOI DU MESSAGE--------------------
      }

      return $this->render('contact/contact.html.twig', [
      'stock'=> $stock,
      'form' => $formContact->createView()
      ]);
      } */

    /**
     * @Route("/contact", name="contact")
     */
    public function index(\Swift_Mailer $mailer, Request $request, DownloadRepository $download) {

        $contact = new Contact();

        //traitement de l'affichage du formulaire de contact
        $formContact = $this->createForm(ContactType::class, $contact)
                ->add('Envoyer', SubmitType::class);
        
        $formContact->handleRequest($request);
        //var_dump($formContact->isSubmitted());
        
        if ($formContact->isSubmitted() && $formContact->isValid()) {
            $message = "Nom: " . $contact->nom . "\nPrénom : " . $contact->prenom . "\nTel : " . $contact->telephone . "\nSociété : " . $contact->societe . "\nMessage : " . $contact->message;

            $theFinallyMessage = (new \Swift_Message($contact->sujet))

                    ->setFrom($contact->email)
                    //->setTo('stephane.seguier@codex-international.com')
                    ->setBody($message)
            /*
             * If you also want to include a plaintext version of the message
              ->addPart(
              $this->renderView(
              'emails/registration.txt.twig',
              array('name' => $name)
              ),
              'text/plain'
              )
             */
            ;

            if($mailer->send($theFinallyMessage)){
                return $this->render('contact/registration.html.twig',[
                    'name'=> $contact->prenom. " ".$contact->nom
                ]);
            } else {
                echo 'Une erreur est survenue lors de l\'envoi du message';
                die();
            }
        }
        $stock = $download->getStock();
        return $this->render('contact/contact.html.twig', [
                    'form' => $formContact->createView(),
                    'stock' => $stock,
        ]);
    }
}

