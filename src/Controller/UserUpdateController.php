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
use Swagger\Annotations as SWG;
use DateTimeImmutable;
use App\Entity\User;
use Exception;

/**
 * Class UserUpdateController
 *
 * @package App\Controller
 */
class UserUpdateController extends AbstractController
{
    /**
     * @Route("/users/{id}", name="user_update", methods={"PUT"})
     *
     * @SWG\Response(
     *     response="204",
     *     description="Update user."
     * )
     *
     * @SWG\Response(
     *     response="401",
     *     description="Unauthorized, JWT Token not found"
     * )
     *
     * @SWG\Response(
     *     response="404",
     *     description="No user found, check your parameters."
     * )
     *
     * @SWG\Parameter(
     *     name="body",
     *     in="body",
     *     type="array",
     *     description="User data",
     *     schema=@SWG\Schema(ref=@Model(type=App\Entity\User::class, groups={"write_user"}))
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
     * @param  SerializerInterface $serializer
     * @param  ValidatorInterface  $validator
     * @param  Request             $request
     * @param  User                $user
     * @return Response
     *
     * @throws Exception
     */
    public function update(
        User $user,
        Request $request,
        SerializerInterface $serializer,
        ValidatorInterface $validator
    ): Response {

        $this->denyAccessUnlessGranted('item', $user);

        $newUser = $serializer->deserialize(
            $request->getContent(),
            User::class,
            'json'
        );

        $user->setName($newUser->getName());
        $user->setEmail($newUser->getEmail());
        $user->setUpdatedAt(new DateTimeImmutable());

        $constraintViolation = $validator->validate($user);

        if($constraintViolation->count() > 0) {
            return new JsonResponse($constraintViolation, Response::HTTP_BAD_REQUEST);
        }

        $this->getDoctrine()->getManager()->persist($user);
        $this->getDoctrine()->getManager()->flush();

        return new Response(null, Response::HTTP_NO_CONTENT);
    }
}