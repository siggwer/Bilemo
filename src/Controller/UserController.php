<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
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
     * @param UserRepository $repository
     * @return JsonResponse
     */
    public function listing(Request $request, UserRepository $repository): JsonResponse
    {
        return $this->json(
            $repository->findBy(
                [],
                ['name' => 'asc'],
                10,
                $request->query->get('page', 1) * 10 - 10
            )
        );
    }


    /**
     * @Route("/{id}", name="user_read", methods={"GET"})
     *
     * @param User $user
     *
     * @return JsonResponse
     */
    public function read(User $user): JsonResponse
    {
        return $this->json($user);
    }

    /**
     * @Route(name="user_create", methods={"POST"})
     *
     * @param Request $request
     * @param SerializerInterface $serializer
     * @param ValidatorInterface $validator
     * @return JsonResponse
     */
    public function create(
        Request $request,
        SerializerInterface $serializer,
        ValidatorInterface $validator
    ): JsonResponse
    {
        $user = $serializer->deserialize($request->getContent(), User::class, "json");

        $constraintViolation = $validator->validate($user);

        if($constraintViolation->count() > 0) {
            return $this->json($constraintViolation, Response::HTTP_BAD_REQUEST);
        }

        $this->getDoctrine()->getManager()->persist($user);
        $this->getDoctrine()->getManager()->flush();

        return $this->json($user, Response::HTTP_CREATED);
    }

    /**
     * @Route("/{id}", name="user_update", methods={"PUT"})
     *
     * @param User $user
     * @param Request $request
     * @param SerializerInterface $serializer
     * @param ValidatorInterface $validator
     * @return JsonResponse
     */
    public function update(
        User $user,
        Request $request,
        SerializerInterface $serializer,
        ValidatorInterface $validator
    ): JsonResponse
    {
        $user = $serializer->deserialize(
            $request->getContent(),
            User::class,
            "json",
        [AbstractNormalizer::OBJECT_TO_POPULATE => $user]
        );

        $constraintViolation = $validator->validate($user);

        if($constraintViolation->count() > 0) {
            return $this->json($constraintViolation, Response::HTTP_BAD_REQUEST);
        }

        $this->getDoctrine()->getManager()->persist($user);
        $this->getDoctrine()->getManager()->flush();

        return $this->json(null, Response::HTTP_NO_CONTENT);
    }

    /**
     * @Route("/{id}", name="user_delete", methods={"DELETE"})
     *
     * @param User $user
     * @return JsonResponse
     */
    public function delete(User $user): JsonResponse
    {
        $this->getDoctrine()->getManager()->remove($user);
        $this->getDoctrine()->getManager()->flush();

        return $this->json(null, Response::HTTP_NO_CONTENT);
    }
}