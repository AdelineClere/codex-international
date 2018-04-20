<?php
namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;
/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
{
    use ORMBehaviors\Translatable\Translatable;
    
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\OneToMany(targetEntity="Produit", mappedBy="category",cascade={"persist"})
     * @var Collection
     */
    private $produits;
    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $image;
    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $image2;
    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $image3;
    
    public function __construct() {
        $this->produits = new ArrayCollection();
    }
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
    public function getImage2()
    {
        return $this->image2;
    }
    public function setImage2($image2): self
    {
        $this->image2 = $image2;
        return $this;
    }
    public function getImage3()
    {
        return $this->image3;
    }
    public function setImage3($image3): self
    {
        $this->image3 = $image3;
        return $this;
    }
    
    public function __call($method, $arguments)
    {
        return \Symfony\Component\PropertyAccess\PropertyAccess::createPropertyAccessor()->getValue($this->translate(), $method);
    }
    
    public function getProduits() {
        return $this->produits;
    }
    public function setProduits($produits) {
        $this->produits = $produits;
        return $this;
    }
    
}