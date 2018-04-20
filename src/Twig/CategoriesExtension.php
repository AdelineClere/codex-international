<?php
namespace App\Twig;
use App\Repository\CategoryRepository;
use Twig\Extension\AbstractExtension;
use Twig_Extension_GlobalsInterface;
class CategoriesExtension extends AbstractExtension implements Twig_Extension_GlobalsInterface
{
    protected $categoryRepo;
    public function __construct(CategoryRepository $categoryRepo) {
        $this->categoryRepo = $categoryRepo;
    }
    
    public function getGlobals(): array {
                
        $categories = $this->categoryRepo->findAll();
        $data = array();
        for( $i = 0 ; $i < count($categories); $i++ )
        {
            $data["category$i"] = $categories[$i];      
        }
        
        return $data;
        
    }
}