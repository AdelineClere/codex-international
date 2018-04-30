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
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $image1;
    
    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $image2;
    
    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $pdf_nom;  
    

    public function getId()
    {
        return $this->id;
    }

    public function getImage1()
    {
        return $this->image1;
    }
    
    public function setImage1($image1): self
    {
        $this->image1 = $image1;
        return $this;
    }
    
    public function getImage2()
    {
        return $this->image2;
    }
    
    public function setImage2($image2): self
    {
        $this->image2 = $image2;
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
