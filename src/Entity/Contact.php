<?php

namespace App\Entity;


use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

//?/**
//? * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
//? */
//?class User implements UserInterface
class Contact
{

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=50)
     */
    public $nom;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=50)
     */
    public $prenom;

    /**
     * @Assert\NotBlank()
     */
    public $societe;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min=7, max=50)
     */
    public $telephone;

    /**
     * @Assert\Email()
     * @Assert\NotBlank()
     */
    public $email;
    
     /**
     * @Assert\NotBlank()
     * @Assert\Length(min=5, max=150)
     */
    public $sujet;

    /**
     * @Assert\NotBlank()
     */
    public $message;
    
    
}