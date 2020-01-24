<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Client;

/**
 * Class ClientController
 *
 * @package App\Controller
 *
 * @Route("/client")
 */
class ClientController extends AbstractController
{
    /**
     * @Route("/{id}", name="client_read", methods={"GET"})
     *
     * @param Client $client
     *
     * @return JsonResponse
     */
    public function read(Client $client): JsonResponse
    {
        return $this->json($client);
    }
}