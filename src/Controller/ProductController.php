<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Nelmio\ApiDocBundle\Annotation\Security;
use Nelmio\ApiDocBundle\Annotation\Model;
use JMS\Serializer\SerializerInterface;
use App\Repository\ProductRepository;
use Swagger\Annotations as SWG;

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
     * @SWG\Response(
     *     response="200",
     *     description="Return the list of all products.",
     *     @SWG\Schema(ref=@Model(type=App\Entity\Product::class, groups={"list_product"}))
     * )
     *
     * @SWG\Response(
     *     response="401",
     *     description="Unauthorized, JWT Token not found"
     * )
     *
     * @SWG\Tag(name="Product")
     *
     * @Security(name="Bearer")
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
            $serializer->serialize($repository->getPaginatedPhones(
                $request->query->get('page', 1) * 10 - 10
            ), 'json'),
            Response::HTTP_OK,
            ['content-type' => 'application/json']
        );
    }

    /**
     * @Route("/{id}", name="product_read", methods={"GET"})
     *
     * @SWG\Response(
     *     response="200",
     *     description="Return the detail of one product.",
     *     @SWG\Schema(ref=@Model(type=App\Entity\Product::class, groups={"detail_product"}))
     * )
     *
     * @SWG\Response(
     *     response="401",
     *     description="Unauthorized, JWT Token not found"
     * )
     *
     * @SWG\Response(
     *     response="404",
     *     description="No product found."
     * )
     *
     * @SWG\Tag(name="Product")
     *
     * @Security(name="Bearer")
     *
     * @param SerializerInterface $serializer
     * @param ProductRepository $productRepository
     * @param Request $request
     * @return Response
     */
    public function read(
        SerializerInterface $serializer,
        ProductRepository $productRepository,
        Request $request
    ): Response {
       return new Response(
            $serializer->serialize($productRepository->findById($request->get(
                'id')
            ), 'json'),
            Response::HTTP_OK,
            ['content-type' => 'application/json']
        );
    }
}