<?php

namespace App\Controller;

use App\Entity\Esperso;
use App\Form\EspersoType;
use App\Form\ForgottenPasswordType;
use App\Repository\EspersoRepository;
use App\Repository\UserRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Swift_Mailer;
use Swift_Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Translation\TranslatorInterface;

class EspacePersoController extends Controller
{
    /* affiche la pg en front */

    /**
     * @Route("/espace/perso", name="espace_perso") 
     */
    public function index(UserRepository $UserRepo, EspersoRepository $EspersoRepo, Request $request)
    {
        $espersos = $EspersoRepo->findMany();

        $this->denyAccessUnlessGranted('ROLE_USER');
        $fidelite = $UserRepo->cumul_commande($this->getUser());
        return $this->render('espace_perso/espace_perso.html.twig', [
                'fidelite' => $fidelite,
                'espersos' => $espersos,
        ]);
    }

//        public function index(UserRepository $UserRepo, Request $request)
//    {
//        $this->denyAccessUnlessGranted('ROLE_USER');
//        $fidelite = $UserRepo->cumul_commande($this->getUser());
//        return $this->render('espace_perso/espace_perso.html.twig', [
//            'fidelite' => $fidelite,
//        ]);
//    }
//    
    // RAJOUTÉ POUR CRÉER ADMIN ESPACE PERSO

    /**
     * @Route("admin/dashboard_esperso", name="esperso_dashboard")
     */
    public function showEspersoAdmin(EspersoRepository $espersoRepo)
    {
        $espersoList = $espersoRepo->findMany();
        return $this->render('admin/backoffice_esperso.html.twig', ['espersos' => $espersoList]);
    }

    /**
     * @Route("/admin/esperso/delete/{id}", name="delete_esperso")
     */
    public function deleteEsperso($id, ObjectManager $manager, EspersoRepository $espersoRepo)
    {
        $article = $espersoRepo->find($id);
        $manager->remove($article);
        $manager->flush();
        return $this->redirectToRoute('esperso_dashboard');
    }

    /**
     * @Route("/admin/esperso/add", name="add_esperso")
     * @Route("/admin/esperso/edit/{id}", name="edit_esperso")
     */
    public function editEsperso(ObjectManager $manager, Request $request, Esperso $article = null)
    {
        if ($article === null) {
            $article = new Esperso();
        }
        $formEsperso = $this->createForm(EspersoType::class, $article)
            ->add('Envoyer', SubmitType::class);


        $formEsperso->handleRequest($request);

        if ($formEsperso->isSubmitted() && $formEsperso->isValid()) {
            $manager->persist($article);
            $manager->flush();
            return $this->redirectToRoute('esperso_dashboard');
        }

        return $this->render('admin/edit_esperso.html.twig', [
                'form' => $formEsperso->createView()
        ]);
    }

    /**
     * @Route("/forgottenpass", name="forgottenpass")
     */
    function forgottenPassword(
        Swift_Mailer $mailer,
        Request $request,
        UserRepository $userRepo,
        ObjectManager $manager,
        UserPasswordEncoderInterface $encoder,
        TranslatorInterface $translator
    )
    {
        $formForgottenPassword = $this->createForm(ForgottenPasswordType::class);

        $formForgottenPassword->handleRequest($request);

        if ($formForgottenPassword->isSubmitted() && $formForgottenPassword->isValid()) {
            $email = $formForgottenPassword->getData()['email'];
            $newPass = uniqid();
            $user = $userRepo->findOneBy(array('email' => $email));
            $user->setPassword($encoder->encodePassword($user, $newPass));
            $manager->persist($user);
            $locale = $request->getLocale();
            $emailContent = $this->renderView('espace_perso/changepassword_email.' . substr($locale, 0, 2) . '.html.twig', [
                'user' => $user,
                'newPass' => $newPass
            ]);
            $message = new Swift_Message('forgotten_password.email.subject', $emailContent);
            $message->setTo($email);
            if($mailer->send($message)) {
                $this->addFlash('success', $translator->trans('new_password_sent'));
                return $this->redirectToRoute('loginregister');
            } else {
                $this->addFlash('success', $translator->trans('new_password_not_sent'));
            }
            
        }

        return $this->render('espace_perso/forgotten_password.html.twig', [
                'form' => $formForgottenPassword->createView()
        ]);
    }

}
