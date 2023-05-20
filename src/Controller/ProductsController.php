<?php

namespace App\Controller;

use App\Classe\Search;
use App\Entity\Products;
use App\Form\SearchType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/our_products', name: 'app_products')]
    public function index(Request $request): Response
    {

        $search = new Search();
        $form = $this->createForm(SearchType::class,$search);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $products = $this->entityManager->getRepository(Products::class)->findWithSearch($search);
        }else{
            #Chercher donnees a partir du repository
            $products = $this->entityManager->getRepository(Products::class)->findAll();
        }

        return $this->render('products/index.html.twig',[
            'products' => $products,
            'form' => $form -> createView()
        ]);
    }

    #[Route('/product/{slug}', name: 'app_product')]
    public function show($slug): Response
    {
        #Chercher donnees a partir du repository
        $product = $this->entityManager->getRepository(Products::class)->findOneBySlug($slug);
        if (!$product){
            return $this->redirectToRoute('app_products');
        }
        return $this->render('products/show.html.twig',[
            'product' => $product
        ]);
    }
}
