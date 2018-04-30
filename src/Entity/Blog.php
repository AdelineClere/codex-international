<?php

namespace App\Entity;

use Knp\DoctrineBehaviors\Model as ORMBehaviors;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;





/**
 * @ORM\Entity(repositoryClass="App\Repository\BlogRepository")
 */
class Blog
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
        $this->image1= $image1;
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

    function getPdfNom() {
        return $this->pdf_nom;
    }

    function setPdfNom($pdf_nom) {
        $this->pdf_nom = $pdf_nom;
    }


    
    
    
    
    
}