<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\ConstraintViolationListInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Nelmio\ApiDocBundle\Annotation\Security;
use Nelmio\ApiDocBundle\Annotation\Model;
use JMS\Serializer\SerializerInterface;
use App\Exception\BadRequestException;
use Swagger\Annotations as SWG;
use App\Entity\User;
use Exception;

/**
 * Class UserCreateController
 *
 * @package App\Controller
 */
class UserCreateController extends AbstractController
{
    /**
     * @Route("/users/", name="user_create", methods={"POST"})
     *
     * @SWG\Response(
     *     response="201",
     *     description="A new user created.",
     * @SWG\Schema(ref=@Model(type=App\Entity\User::class, groups={"detail_user"}))
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
     * @SWG\Tag(name="User")
     *
     * @Security(name="Bearer")
     *
     * @param SerializerInterface $serializer
     * @param ValidatorInterface  $validator
     * @param Request             $request
     *
     * @return User|ConstraintViolationListInterface
     *
     * @throws Exception
     */
    public function create(
        SerializerInterface $serializer,
        ValidatorInterface $validator,
        Request $request
    )
    {
        $user = $serializer->deserialize(
            $request->getContent(),
            User::class,
            'json'
        );

        $user->init();
        $constraintViolation = $validator->validate($user);

        if($constraintViolation->count() > 0) {
            throw new BadRequestException($constraintViolation);
        }

        $user->setClient($this->getUser());
        $this->getDoctrine()->getManager()->persist($user);
        $this->getDoctrine()->getManager()->flush();

        return $user;
    }
}