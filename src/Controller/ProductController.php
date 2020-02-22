<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use JMS\Serializer\SerializerInterface;
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
     * @param SerializerInterface $serializer
     *
     * @return Response
     */
    public function listing(
        Request $request,
        ProductRepository $repository,
        SerializerInterface $serializer
    ): Response {
        return new Response(
            $serializer->serialize($repository->findBy(
                [],
                ['price' => 'asc'],
                10,
                $request->query->get('page', 1) * 10 - 10
            ), 'json'),
            Response::HTTP_OK,
            ['content-type' => 'application/json']
        );
    }

    /**
     * @Route("/{id}", name="product_read", methods={"GET"})
     *
     * @param Product $product
     * @param SerializerInterface $serializer
     *
     * @return Response
     */
    public function read(
        SerializerInterface $serializer,
        Product $product
    ): Response {
        return new Response(
            $serializer->serialize($product,
                'json'
            ),
            Response::HTTP_OK, ['content-type' => 'application/json']);
    }
}