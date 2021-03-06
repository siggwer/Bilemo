<?php

namespace App\Listener;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use Symfony\Component\HttpFoundation\Response;
use JMS\Serializer\SerializerInterface;
use Exception;

/**
 * Class ListenerView
 *
 * @package App\Event
 */
class ListenerView
{
    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * ListenerView constructor.
     *
     * @param SerializerInterface $serializer
     */
    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @param ViewEvent $event
     *
     * @throws Exception
     */
    public function onKernelView(ViewEvent $event): void
    {
        $value = $event->getControllerResult();
        $method = $event->getRequest()->getMethod();

        if ($value !== null && $method === 'GET') {
            $response = new Response(
                $this->serializer->serialize($value, 'json'),
                Response::HTTP_OK,
                ['content-type' => 'application/json']
            );
        } elseif ($value !== null && $method === 'POST') {
            $response = new Response(
                $this->serializer->serialize($value, 'json'),
                Response::HTTP_CREATED,
                ['content-type' => 'application/json']
            );
        } elseif ($value === null && ($method === 'PUT' || $method === 'DELETE')) {
            $response = new JsonResponse(
                null,
                Response::HTTP_NO_CONTENT,
                ['content-type' => 'application/json']
            );
        }
        $event->setResponse($response);
    }
}
