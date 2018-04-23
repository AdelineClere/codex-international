<?php
namespace App\Controller;

use App\Entity\Blog;
use App\Form\BlogType;
use App\Repository\BlogRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
class BlogController extends Controller
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        return $this->render('blog/blog.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    /**
     * @Route("admin/dashboard_blog", name="blog_dashboard")
     */
    public function showBlogAdmin(BlogRepository $blogRepo)
    {
        $blogList = $blogRepo ->findMany();
        return $this->render('admin/backoffice_blog.html.twig', ['blogs' => $blogList]);
    }
    
    /**
     * @Route("/admin/blog/delete/{id}", name="delete_blog")
     */
    
    public function deleteBlog($id, ObjectManager $manager, BlogRepository $blogRepo)
    {
        $article = $blogRepo->find($id);
        $manager->remove($article);
        $manager->flush();
        return $this->redirectToRoute('blog_dashboard');
    }
    
    /**
     * @Route("/admin/blog/add", name="add_blog")
     * @Route("/admin/blog/edit/{id}", name="edit_blog")
     */
    
    public function editBlog(ObjectManager $manager, Request $request, Blog $article = null)
    {
        if($article === null)
        {
            $article = new Blog();
        }
        $formBlog = $this->createForm(BlogType::class, $article)
            ->add('Envoyer', SubmitType::class);
        
  
        $formBlog->handleRequest($request); 
        
        if($formBlog->isSubmitted() && $formBlog->isValid())
        {
            $manager->persist($article);
            $manager->flush();
            return $this->redirectToRoute('blog_dashboard');
        }
        
        return $this->render('admin/edit_blog.html.twig', [
           'form' => $formBlog->createView() 
        ]);
    }
}