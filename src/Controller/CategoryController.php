<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use App\Repository\DownloadRepository;
use App\Repository\ProduitRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Translation\TranslatorInterface;

class CategoryController extends Controller {

    /**
     * @Route("/produit", name="produit")
     */
    public function index(TranslatorInterface $translator, Request $request) {
        $translated = $translator->trans('Thibault est formidable !');

        return $this->render('produit/produit.html.twig', [
                    'messageTraduit' => $translated,
        ]);
    }

    /**
     * @Route("{_locale}/category/{slug}/produits", name="category")
     */
    public function showCategory(CategoryRepository $categoryRepo, Request $request, $slug, ProduitRepository $produitRepo, DownloadRepository $download) {
        $category = $categoryRepo->findCategoryBySlug($slug, $request->getLocale());
        $allProduts = $produitRepo->getProductsByCategory($category);
        $stock = $download->getStock();
        return $this->render('produit/produit.html.twig', [
                    'category' => $category,
                    'produits' => $allProduts,
                    'stock' => $stock,
        ]);
    }

    /**
     * @Route("admin/category_dashboard", name="category_dashboard")
     * @Route("admin/category_dashboard/{page}", name="category_paginated", requirements={"page":"\d+"})
     */
    public function showCategoryAdmin(CategoryRepository $categoryRepo) {
        $categoryList = $categoryRepo->findAll();
        return $this->render('admin/category_dashboard.html.twig', ['categories' => $categoryList]);
    }

    /**
     * @Route("/admin/category/Add", name="add_category")
     * @Route("/admin/category/edit/{id}", name="edit_category")
     */
    public function editCategory(Request $request, ObjectManager $manager, Category $category = null) {
        if ($category === null) {
            $category = new Category();
            $group = 'insertion';
        } else {
            $oldImage = $category->getImage();
            $oldImage2 = $category->getImage2();
            $oldImage3 = $category->getImage3();
            $group = 'edition';
        }
        $formCategory = $this->createForm(CategoryType::class, $category)
                ->add('Envoyer', SubmitType::class);
        $formCategory->handleRequest($request);

        if ($formCategory->isSubmitted() && $formCategory->isValid()) {
            $image = $category->getImage();
            if ($image === null) {
                $category->setImage($oldImage);
            } else {
                $newFileName = md5(uniqid()) . '.' . $image->guessExtension();
                $image->move('uploads', $newFileName);
                $category->setImage('uploads/' . $newFileName);
            }
            $manager->persist($category);

            $image = $category->getImage2();
            if ($image === null) {
                $category->setImage2($oldImage);
            } else {
                $newFileName = md5(uniqid()) . '.' . $image->guessExtension();
                $image->move('uploads', $newFileName);
                $category->setImage2('uploads/' . $newFileName);
            }
            $manager->persist($category);

            $image = $category->getImage3();
            if ($image === null) {
                $category->setImage3($oldImage);
            } else {
                $newFileName = md5(uniqid()) . '.' . $image->guessExtension();
                $image->move('uploads', $newFileName);
                $category->setImage3('uploads/' . $newFileName);
            }
            $manager->persist($category);

            $manager->flush();
            return $this->redirectToRoute('category_dashboard');
        }
        return $this->render('admin/edit_category.html.twig', [
                    'form' => $formCategory->createView()
        ]);
    }

    /**
     * @Route("/admin/category/delete/{id}", name="delete_category")
     */
    public function deleteCategory(Category $category, ObjectManager $manager) {
        $manager->remove($category);
        $manager->flush();
        return $this->redirectToRoute('category_dashboard');
    }

}
