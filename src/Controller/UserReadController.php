<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Nelmio\ApiDocBundle\Annotation\Security;
use Nelmio\ApiDocBundle\Annotation\Model;
use Swagger\Annotations as SWG;
use App\Entity\User;

/**
 * Class UserReadController
 *
 * @package App\Controller
 */
class UserReadController extends AbstractController
{
    /**
     * @Route("/users/{id}", name="user_read", methods={"GET"})
     *
     * @SWG\Response(
     *     response="200",
     *     description="Return the detail of one product",
     * @SWG\Schema(
     *     type="array",
     * @Model(type=User::class)
     *     )
     * )
     *
     * @SWG\Response(
     *     response="403",
     *     description="Acces denied"
     * )
     *
     * @SWG\Response(
     *     response="404",
     *     description="No user found, check your parameters."
     * )
     *
     * @SWG\Parameter(
     *     name="id",
     *     in="path",
     *     type="string",
     *     description="Id User"
     * )
     *
     * @SWG\Tag(name="User")
     *
     * @Security(name="Bearer")
     *
     * @param User $user
     *
     * @return User
     */
    public function read(User $user): User
    {
        $this->denyAccessUnlessGranted('item', $user);

        return $user;
    }
}
