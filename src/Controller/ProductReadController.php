<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Nelmio\ApiDocBundle\Annotation\Security;
use Nelmio\ApiDocBundle\Annotation\Model;
use JMS\Serializer\SerializerInterface;
use Swagger\Annotations as SWG;
use App\Entity\Product;

/**
 * Class ProductReadController
 *
 * @package App\Controller
 */
class ProductReadController extends AbstractController
{
    /**
     * @Route("/products/{id}", name="product_read", methods={"GET"})
     *
     * @SWG\Response(
     *     response="200",
     *     description="Return the detail of one product.",
     * @SWG\Schema(ref=@Model(type=App\Entity\Product::class, groups={"detail_product"}))
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
     * @param  SerializerInterface $serializer
     * @param  Product             $product
     * @return Response
     */
    public function read(
        SerializerInterface $serializer,
        Product $product
    ): Response {
        return new Response(
            $serializer->serialize($product, 'json'),
            Response::HTTP_OK,
            ['content-type' => 'application/json']
        );
    }
}