<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

/**
 * Class UserController
 *
 * @package App\Controller
 *
 * @Route("/user")
 */
class UserController extends AbstractController
{
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
}