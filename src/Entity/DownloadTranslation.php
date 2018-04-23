<?php

namespace App\Entity;

use Knp\DoctrineBehaviors\Model as ORMBehaviors;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="DownloadTranslationRepository")
 */
class DownloadTranslation
{
    use ORMBehaviors\Translatable\Translation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sujet;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;
    
    /**
     * @ORM\Column(type="string", length=150)
     */
    protected $locale;

    public function getId()
    {
        return $this->id;
    }
    
    public function getSujet()
    {
        return $this->sujet;
    }

    public function setSujet($sujet): self
    {
        $this->sujet = $sujet;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }
}
