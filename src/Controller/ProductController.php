<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
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