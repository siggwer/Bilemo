<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Validator\ValidatorInterface;
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

    /**
     * @Route(name="user_create", methods={"POST"})
     *
     * @param Request $request
     * @param SerializerInterface $serializer
     * @param ValidatorInterface $validator
     * @return Response
     */
    public function create(
        Request $request,
        SerializerInterface $serializer,
        ValidatorInterface $validator
    ): Response
    {
        $user = $serializer->deserialize($request->getContent(), User::class, 'json');

        $constraintViolation = $validator->validate($user);

        if($constraintViolation->count() > 0) {
            return new Response($constraintViolation, Response::HTTP_BAD_REQUEST);
        }

        $this->getDoctrine()->getManager()->persist($user);
        $this->getDoctrine()->getManager()->flush();

        return new Response(
        $serializer->serialize($user,
            'json'
        ),
        Response::HTTP_OK, []);
    }

    /**
     * @Route("/{id}", name="user_update", methods={"PUT"})
     *
     * @param User $user
     * @param Request $request
     * @param SerializerInterface $serializer
     * @param ValidatorInterface $validator
     * @return Response
     */
    public function update(
        User $user,
        Request $request,
        SerializerInterface $serializer,
        ValidatorInterface $validator
    ): Response
    {
        $user = $serializer->deserialize(
            $request->getContent(),
            User::class,
            'json',
            [AbstractNormalizer::OBJECT_TO_POPULATE => $user]
        );

        $constraintViolation = $validator->validate($user);

        if($constraintViolation->count() > 0) {
            return new Response($constraintViolation, Response::HTTP_BAD_REQUEST);
        }

        $this->getDoctrine()->getManager()->persist($user);
        $this->getDoctrine()->getManager()->flush();

        return new Response(
            $serializer->serialize($user,
                'json'
            ),
            Response::HTTP_OK, []);
    }

    /**
     * @Route("/{id}", name="user_delete", methods={"DELETE"})
     *
     * @param User $user
     * @return Response
     */
    public function delete(User $user): Response
    {
        $this->getDoctrine()->getManager()->remove($user);
        $this->getDoctrine()->getManager()->flush();

        return new Response(null, Response::HTTP_NO_CONTENT);

    }
}