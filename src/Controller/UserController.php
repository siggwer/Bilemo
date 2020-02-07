<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use JMS\Serializer\SerializerInterface;
use App\Repository\UserRepository;
use App\Entity\User;

/**
 * Class UserController
 *
 * @package App\Controller
 *
 * @Route("/users")
 */
class UserController extends AbstractController
{
    /**
     * @Route(name="user_listing", methods={"GET"})
     *
     * @param Request $request
     * @param SerializerInterface $serializer
     * @param UserRepository $repository
     * @return Response
     */
    public function listing(
        Request $request,
        SerializerInterface $serializer,
        UserRepository $repository
    ): Response {
        return new Response(
            $serializer->serialize($repository->findBy(
                [],
                ['name' => 'asc'],
                10,
                $request->query->get('page', 1) * 10 - 10
            ), 'json'),
            Response::HTTP_OK,
            ['content-type' => 'application/json']
        );
    }

    /**
     * @Route("/{id}", name="user_read", methods={"GET"})
     *
     * @param User $user
     * @param SerializerInterface $serializer
     *
     * @return Response
     */
    public function read(
        SerializerInterface $serializer,
        User $user
    ): Response {
        return new Response(
            $serializer->serialize($user,
                'json'
            ),
            Response::HTTP_OK, []);
    }
}