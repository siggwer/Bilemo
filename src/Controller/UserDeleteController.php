<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Nelmio\ApiDocBundle\Annotation\Security;
use Swagger\Annotations as SWG;
use App\Entity\User;

/**3
 * Class UserDeleteController
 *
 * @package App\Controller
 */
class UserDeleteController extends AbstractController
{
    /**
     * @Route("/users/{id}", name="user_delete", methods={"DELETE"})
     *
     * @SWG\Response(
     *     response="204",
     *     description="User deleted."
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
     * @param User $user
     *
     * @return null
     */
    public function delete(User $user)
    {
        $this->denyAccessUnlessGranted('item', $user);
        $this->getDoctrine()->getManager()->remove($user);
        $this->getDoctrine()->getManager()->flush();

        return null; //new JsonResponse(null, Response::HTTP_NO_CONTENT);
    }
}