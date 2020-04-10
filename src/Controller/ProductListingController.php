<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Nelmio\ApiDocBundle\Annotation\Security;
use App\Services\Paginator\PaginatorFactory;
use Nelmio\ApiDocBundle\Annotation\Model;
use App\Repository\ProductRepository;
use Swagger\Annotations as SWG;
use Exception;

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
     *          type="object",
     * @SWG\Property(property="page",                         type="integer"),
     * @SWG\Property(property="pages",                        type="integer"),
     * @SWG\Property(property="total",                        type="integer"),
     * @SWG\Property(property="limit",                        type="integer"),
     * @SWG\Property(
     *              property="_links",
     * @SWG\Items(
     *                  type="object",
     * @SWG\Property(property="next",                         type="string"),
     * @SWG\Property(property="first",                        type="string"),
     * @SWG\Property(property="last",                         type="string"),
     * @SWG\Property(property="previous",                     type="string")
     *              )
     *           ),
     * @SWG\Property(
     *               property="_embedded",
     * @SWG\Items(ref=@Model(type=App\Entity\Product::class))
     *          ),
     *      )
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
     * @param Request           $request
     * @param ProductRepository $repository
     * @param PaginatorFactory  $paginatorFactory
     *
     * @return array
     *
     * @throws Exception
     */
    public function listing(
        Request $request,
        ProductRepository $repository,
        PaginatorFactory $paginatorFactory
    ) : array {
        return $paginatorFactory->getData(
            'product_listing',
            $repository->createPaginatedQueryBuilder(
                $request->query->get('page', 1),
                $request->query->get('limit', 10)
            ),
            $request->query->get('page', 1),
            $request->query->get('limit', 10)
        );
    }
}
