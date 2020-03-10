<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Nelmio\ApiDocBundle\Annotation\Security;
use Nelmio\ApiDocBundle\Annotation\Model;
use JMS\Serializer\SerializerInterface;
use App\Repository\UserRepository;
use Swagger\Annotations as SWG;
use App\Entity\User;

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
     *     type="array",
     * @Model(type=User::class)
     *     )
     * )
     *
     * @SWG\Tag(name="User")
     *
     * @Security(name="Bearer")
     *
     * @param Request             $request
     * @param SerializerInterface $serializer
     * @param UserRepository      $repository
     *
     * @return Response
     */
    public function listing(
        Request $request,
        SerializerInterface $serializer,
        UserRepository $repository
    ): Response {
        return new Response(
            $serializer->serialize(
                $repository->findBy(
                    ['client' => $this->getUser()],
                    [],
                    10,
                    $request->query->get('page', 1) * 10 - 10
                ), 'json'
            ),
            Response::HTTP_OK,
            ['content-type' => 'application/json']
        );
        return $repository->findBy( ['client' => $this->getUser()],
            [],
            10,
            $request->query->get('page', 1) * 10 - 10
        );
    }
}
