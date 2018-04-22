<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BlogTranslationRepository")
 */
class BlogTranslation
{
    use ORMBehaviors\Translatable\Translation;
     
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;
    /**
     * @ORM\Column(type="text")
     */
    private $article;
    /**
     * @ORM\Column(type="string", length=150)
     */
    protected $locale;
    public function getTitre()
    {
        return $this->titre;
    }
    public function setTitre(string $titre): self
    {
        $this->titre = $titre;
        return $this;
    }
    public function getArticle()
    {
        return $this->article;
    }
    public function setArticle(string $article): self
    {
        $this->article = $article;
        return $this;
    }
}