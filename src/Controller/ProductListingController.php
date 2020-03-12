<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Nelmio\ApiDocBundle\Annotation\Security;
use Nelmio\ApiDocBundle\Annotation\Model;
use App\Repository\ProductRepository;
use Swagger\Annotations as SWG;
use App\Entity\Product;

/**
 * Class ProductListingController
 *
 * @package App\Controller
 */
class ProductListingController extends AbstractController
{
    /**
     * @Route("/products", name="product_listing", methods={"GET"})
     *
     * @SWG\Response(
     *     response="200",
     *     description="Return the list of all products.",
     * @SWG\Schema(
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
     * @SWG\Tag(name="Product")
     *
     * @Security(name="Bearer")
     *
     * @param Request $request
     * @param ProductRepository $repository
     * @return Product
     */
    public function listing(
        Request $request,
        ProductRepository $repository
    ): Array {
        return $repository->getPaginatedPhones(
            $request->query->get(
                'page', 1) * 10 - 10);
    }
}
