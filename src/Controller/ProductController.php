<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\ProductRepository;
use App\Entity\Product;

/**
 * Class ProductController
 *
 * @package App\Controller
 *
 * @Route("/products")
 */
class ProductController extends AbstractController
{
    /**
     * @Route(name="product_listing", methods={"GET"})
     *
     * @param Request $request
     * @param ProductRepository $repository
     * @return JsonResponse
     */
    public function listing(Request $request, ProductRepository $repository): JsonResponse
    {
        return $this->json(
            $repository->findBy(
                [],
                ['price' => 'asc'],
                10,
                $request->query->get('page', 1) * 10 - 10
            )
        );
    }

    /**
     * @Route("/{id}", name="product_read", methods={"GET"})
     *
     * @param Product $product
     *
     * @return JsonResponse
     */
    public function read(Product $product): JsonResponse
    {
        return $this->json($product);
    }
}