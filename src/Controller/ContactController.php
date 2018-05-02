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
            $message = "Nom: " . $contact->nom . "\nPrénom : " . $contact->prenom . "\nTel : " . $contact->telephone . "\nSociété : " . $contact->societe . "\nMessage : " . $contact->message . "\nHoraires : " . $contact->horaires;

            $theFinallyMessage = (new \Swift_Message($contact->sujet))

                    ->setFrom($contact->email)
                    ->setTo($contact->email . 'stephane.seguier@codex-international.com')
                    ->setBody($message . "Nous vous contactons rapidement");            

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



//            // pour le client
//            $emailPourUser =
//                (new \Swift_Message('Votre demande de contact à monsite.com'))
//                ->setFrom('webmaster@monsite.com')
//                ->setTo($contact->email)
//                ->setBody('Merci pour votre demande. Nous vous contactons rapidement');
//            $mailer->send($emailPourUser);
// 
//            // pour l'admin du site
//            $emailPourAdmin = (new \Swift_Message($contact->sujet))
//                ->setFrom($contact->email)
//                ->setTo('admin@email.com')
//                ->setBody('Un message à été postée sur monsite.com : '.$message.' Par : '.$contact->email);
//            $mailer->send($emailPourAdmin);
