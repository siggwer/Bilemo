<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Product;

/**
 * Class ProductController
 *
 * @package App\Controller
 *
 * @Route("/product")
 */
class ProductController extends AbstractController
{
    /**
     * @Route("/{id}", name="product_read", methods={"GET"})
     *
     * @param Product $product
     *
     * @return JsonResponse
     */
    public function read(Product $product): JsonResponse
    {
        return $this->json($product);
    }

    /**
     * @Route(name="product_create", methods={"POST"})
     *
     * @param Request $request
     * @param SerializerInterface $serializer
     * @param ValidatorInterface $validator
     *
     * @return JsonResponse
     */
    public function create(
        Request $request,
        SerializerInterface $serializer,
        ValidatorInterface $validator
    ): JsonResponse
    {
        $product = $serializer->deserialize($request->getContent(), Product::class, "json");

        $constraintViolation = $validator->validate($product);

        if($constraintViolation->count() > 0) {
            return $this->json($constraintViolation, Response::HTTP_BAD_REQUEST);
        }

        $this->getDoctrine()->getManager()->persist($product);
        $this->getDoctrine()->getManager()->flush();

        return $this->json($product, Response::HTTP_CREATED);
    }
}