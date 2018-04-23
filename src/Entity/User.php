<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Serializable;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity("email")
 */
class User implements UserInterface, Serializable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=2, max=50)
     */
    private $nom;
    /**
     * @ORM\Column(type="string", length=30)
     * @Assert\Length(min=2, max=50)
     */
    private $prenom;
    /**
     * @ORM\Column(type="string", length=50)
     */
    private $societe;
    /**
     * @ORM\Column(type="string", length=30)
     * @Assert\Length(min=2, max=50)
     */
    private $telephone;
    /**
     * @ORM\Column(type="string", length=100, unique=true)
     * @Assert\Email()
     */
    private $email;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $cumul_commande;
    
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @Assert\NotBlank(groups={"insertion"})
     * @Assert\Length(max=4096)
     */
    private $plainPassword;
    
    public function getPlainPassword() {
        return $this->plainPassword;
    }
    public function setPlainPassword($plainPassword) {
        $this->plainPassword = $plainPassword;
        return $this;
    }
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=5, max=255)
     * @Assert\NotBlank(groups={"insertion"})
     */
    private $password;
    
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }
    public function getSociete()
    {
        return $this->societe;
    }
    public function setSociete(string $societe): self
    {
        $this->societe = $societe;
        return $this;
    }
    public function getTelephone()
    {
        return $this->telephone;
    }
    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;
        return $this;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }
    public function getCumulCommande()
    {
        return $this->cumul_commande;
    }
    public function setCumulCommande(int $cumul_commande): self
    {
        $this->cumul_commande = $cumul_commande;
        return $this;
    }
    
    /**
     * 
     * @ORM\Column(type="string", length=100)
     */ 
    private $roles;
    
    function setRoles($roles) 
    {
        $this->roles = $roles;
    }
    
    public function getRoles() 
    {
        return explode('|', $this ->roles);
    }
    
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->email,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->email,
            $this->password,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }
    public function eraseCredentials() {
        
    }
    public function getSalt() {
        
    }
    public function getUsername()
    {
        return $this->email;
    }   
    
    public function setUsername(string $email): self
    {
        $this->email = $email;
        return $this;
    }
}