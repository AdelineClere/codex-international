<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;
/**
 * @ORM\Entity(repositoryClass="App\Repository\ProduitRepository")
 */
class Produit
{
    
    use ORMBehaviors\Translatable\Translatable;
    
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    
    
    private $id;
        
    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="produits",cascade={"persist"})
     * @var Category
     */
    private $category;
    
    /**
     * @ORM\Column(type="string", length=200)
     */
    private $pdf;
    
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getPdf()
    {
        return $this->pdf;
    }
    
    public function setPdf(string $pdf): self
    {
        $this->pdf = $pdf;
        return $this;
    }
    
    public function __call($method, $arguments)
    {
        return \Symfony\Component\PropertyAccess\PropertyAccess::createPropertyAccessor()->getValue($this->translate(), $method);
    }
    
    public function getCategory() {
        return $this->category;
    }
    
    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }
}