<?php

namespace App\Listener;

use JMS\Serializer\SerializerInterface;
use Symfony\Component\ExpressionLanguage\ExpressionFunction;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use Symfony\Component\HttpFoundation\Response;
use JMS\Serializer\Serializer;

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
     * @throws \Exception
     */
    public function onKernelView(ViewEvent $event): void
    {
        $value = $event->getControllerResult();
        dd($event->getKernel());

        $response = new Response(
           $this->serializer->serialize($value, 'json'),
            Response::HTTP_OK,
            ['content-type' => 'application/json']);

        $event->setResponse($response);
    }
}