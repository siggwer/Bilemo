<?php

namespace App\Controller;

use App\Event\ListenerView;
use JMS\Serializer\Serializer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Nelmio\ApiDocBundle\Annotation\Security;
use Nelmio\ApiDocBundle\Annotation\Model;
use JMS\Serializer\SerializerInterface;
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
     * @SWG\Schema(ref=@Model(type=App\Entity\User::class, groups={"detail_user"}))
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
     *
     * @param User                $user
     *
     * @return User|void
     */
    public function read(
        //SerializerInterface $serializer,
        ListenerView $listenerView,
        User $user
    )
    {

        $this->denyAccessUnlessGranted('item', $user);

        return $user;
//        return new Response(
//            $serializer->serialize($user, 'json'),
//            Response::HTTP_OK,
//            ['content-type' => 'application/json']
//        );
    }
}