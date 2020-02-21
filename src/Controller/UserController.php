<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
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
     * @SWG\Response(
     *     response="200",
     *     description="Return the list of all users.",
     *     @SWG\Schema(ref=@Model(type=App\Entity\User::class, groups={"list_user"}))
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
            $serializer->serialize($repository->getPaginatedUsers(
                ['client' => $this->getUser()],
                $request->query->get('page', 1) * 10 - 10
            ), 'json'),
            Response::HTTP_OK,
            ['content-type' => 'application/json']
        );
    }

    /**
     * @Route("/{id}", name="user_read", methods={"GET"})
     *
     * @SWG\Response(
     *     response="200",
     *     description="Return the list of all users.",
     *     @SWG\Schema(ref=@Model(type=App\Entity\User::class, groups={"detail_user"}))
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
     * @param SerializerInterface $serializer
     * @param UserRepository $userRepository
     * @param Request $request
     * @return Response
     */
    public function read(
        SerializerInterface $serializer,
        UserRepository $userRepository,
        Request $request
    ): Response {
        $user = $request->get('id');
        $this->denyAccessUnlessGranted('item', $user);

        return new Response(
            $serializer->serialize($userRepository->findById($request->get(
                'id')
            ), 'json'),
            Response::HTTP_OK,
            ['content-type' => 'application/json']
        );
    }

    /**
     * @Route(name="user_create", methods={"POST"})
     *
     * @SWG\Response(
     *     response="201",
     *     description="A new user created.",
     *     @SWG\Schema(ref=@Model(type=App\Entity\User::class, groups={"add_user"}))
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
     *     description="Id Client"
     * )
     *
     * @SWG\Parameter(
     *     name="id",
     *     in="path",
     *     type="string",
     *     description="Id user."
     * )
     *
     * @SWG\Tag(name="User")
     *
     * @Security(name="Bearer")
     *
     * @param SerializerInterface $serializer
     * @param ValidatorInterface $validator
     * @param Request $request
     * @return Response
     */
    public function create(
        SerializerInterface $serializer,
        ValidatorInterface $validator,
        Request $request
    ): Response
    {
        $user = $serializer->deserialize($request->getContent(), User::class, 'json');

        $constraintViolation = $validator->validate($user);

        if($constraintViolation->count() > 0) {
            return new JsonResponse($constraintViolation, Response::HTTP_BAD_REQUEST);
        }

        $this->getDoctrine()->getManager()->persist($user);
        $this->getDoctrine()->getManager()->flush();

        return new Response(
            $serializer->serialize($user,
                'json'
            ),
            Response::HTTP_OK, ['content-type' => 'application/json']);
    }

    /**
     * @Route("/{id}", name="user_update", methods={"PUT"})
     *
     * @SWG\Response(
     *     response="201",
     *     description="Update user.",
     *     @SWG\Schema(ref=@Model(type=App\Entity\User::class, groups={"update_user"}))
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
     *     description="Id Client"
     * )
     *
     * @SWG\Parameter(
     *     name="id",
     *     in="path",
     *     type="string",
     *     description="Id user."
     * )
     *
     * @SWG\Tag(name="User")
     *
     * @Security(name="Bearer")
     *
     * @param SerializerInterface $serializer
     * @param ValidatorInterface $validator
     * @param UserRepository $userRepository
     * @param Request $request
     * @return Response
     */
    public function update(
        User $user,
        Request $request,
        SerializerInterface $serializer,
        ValidatorInterface $validator
    ): Response
    {
        var_dump($user);
        exit;
        $this->denyAccessUnlessGranted('item', $request->get('id'));
        $user = $serializer->deserialize(
            $request->getContent(),
            User::class,
            'json',
            [AbstractNormalizer::OBJECT_TO_POPULATE => $user]
        );


        $constraintViolation = $validator->validate($user);

        if($constraintViolation->count() > 0) {
            return new JsonResponse($constraintViolation, Response::HTTP_BAD_REQUEST);
        }

        $this->getDoctrine()->getManager()->persist($user);
        $this->getDoctrine()->getManager()->flush();

        return new Response(
            $serializer->serialize($user,
                'json'
            ),
            Response::HTTP_OK, ['content-type' => 'application/json']);
    }

    /**
     * @Route("/{id}", name="user_delete", methods={"DELETE"})
     *
     * @SWG\Response(
     *     response="204",
     *     description="User deleted.",
     *     @SWG\Schema(ref=@Model(type=App\Entity\User::class, groups={"delete_user"}))
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
     *     description="Id Client"
     * )
     *
     * @SWG\Parameter(
     *     name="id",
     *     in="path",
     *     type="string",
     *     description="Id user."
     * )
     *
     * @SWG\Tag(name="User")
     *
     * @Security(name="Bearer")
     * @param User $user
     * @return Response
     */
    public function delete(User $user): Response
    {
        $this->denyAccessUnlessGranted('item');
        $this->getDoctrine()->getManager()->remove($user);
        $this->getDoctrine()->getManager()->flush();

        return new Response(null, Response::HTTP_NO_CONTENT);

    }
}