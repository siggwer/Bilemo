<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Services\Paginator\PaginatorFactory;
use Nelmio\ApiDocBundle\Annotation\Security;
use Nelmio\ApiDocBundle\Annotation\Model;
use App\Repository\UserRepository;
use Swagger\Annotations as SWG;
use Exception;

/**
 * Class UserListingController
 *
 * @package App\Controller
 *
 * @Route("/users")
 */
class UserListingController extends AbstractController
{
    /**
     * @Route(name="user_listing", methods={"GET"})
     *
     * @SWG\Response(
     *     response="200",
     *     description="Return the list of all users.",
     * @SWG\Schema(
     *          type="object",
     * @SWG\Property(property="page",                      type="integer"),
     * @SWG\Property(property="pages",                     type="integer"),
     * @SWG\Property(property="total",                     type="integer"),
     * @SWG\Property(property="limit",                     type="integer"),
     * @SWG\Property(
     *              property="_links",
     * @SWG\Items(
     *                  type="object",
     * @SWG\Property(property="next",                      type="string"),
     * @SWG\Property(property="first",                     type="string"),
     * @SWG\Property(property="last",                      type="string"),
     * @SWG\Property(property="previous",                  type="string")
     *              )
     *           ),
     * @SWG\Property(
     *               property="array",
     * @SWG\Items(ref=@Model(type=App\Entity\User::class))
     *          ),
     *      )
     * )
     *
     * @SWG\Tag(name="User")
     *
     * @Security(name="Bearer")
     *
     * @param Request          $request
     * @param UserRepository   $repository
     * @param PaginatorFactory $paginatorFactory
     *
     * @return array
     *
     * @throws Exception
     */
    public function listing(
        Request $request,
        UserRepository $repository,
        PaginatorFactory $paginatorFactory
    ) {
        return $paginatorFactory->getData(
            'user_listing',
            $repository->createPaginatedQueryBuilder(
                $this->getUser(),
                $request->query->get('page', 1),
                $request->query->get('limit', 10)
            ),
            $request->query->get('page', 1),
            $request->query->get('limit', 10)
        );
    }
}
