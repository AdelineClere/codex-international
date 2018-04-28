<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EspersoRepository")
 */
class Esperso
{
    use ORMBehaviors\Translatable\Translatable;
    
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $image;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pdf_nom;  
    

    public function getId()
    {
        return $this->id;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }
       
    public function getPdfNom()
    {
        return $this->pdf_nom;
    }

    public function setPdfNom(string $pdf_nom): self
    {
        $this->pdf_nom = $pdf_nom;

        return $this;
    }
    
    
    
    
    
    
}
