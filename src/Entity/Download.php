<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DownloadRepository")
 */
class Download
{
    use ORMBehaviors\Translatable\Translatable;
    
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $pdf_key;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pdf_nom;   

    public function getId()
    {
        return $this->id;
    }

    public function getPdfKey()
    {
        return $this->pdf_key;
    }

    public function setPdfKey(string $pdf_key): self
    {
        $this->pdf_key = $pdf_key;

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
    
    public function __call($method, $arguments)
    {
        return \Symfony\Component\PropertyAccess\PropertyAccess::createPropertyAccessor()->getValue($this->translate(), $method);
    }
}
