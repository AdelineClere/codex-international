<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DownloadRepository")
 */
class Download
{
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

    public function getpdf_key()
    {
        return $this->pdf_key;
    }

    public function setpdf_key(string $pdf_key): self
    {
        $this->pdf_key = $pdf_key;

        return $this;
    }

    public function getpdf_nom()
    {
        return $this->pdf_nom;
    }

    public function setpdf_nom(string $pdf_nom): self
    {
        $this->pdf_nom = $pdf_nom;

        return $this;
    }
}
