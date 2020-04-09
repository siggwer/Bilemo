<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Nelmio\ApiDocBundle\Annotation\Security;
use Nelmio\ApiDocBundle\Annotation\Model;
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
     * * @SWG\Schema(
     *      type="array",
     * @Model(type=Product::class)
     *     )
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
     * @param Product $product
     *
     * @return Product
     */
    public function read(Product $product): Product
    {
        return $product;
    }
}
