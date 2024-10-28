<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ProductService;
class ProductController extends AbstractController
{
    #[Route('/product', name: 'product')]
    public function product(ProductService $productsService): Response
    {
        $products = $productsService->getProducts();
        return $this->render('product/product.html.twig', compact('products'));
    }

}
