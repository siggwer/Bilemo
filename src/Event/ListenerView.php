<?php

namespace App\Event;

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
     * @param ViewEvent $event
     * @param Serializer $serializer
     */
    public function onKernelView(ViewEvent $event, Serializer $serializer): void
    {

        $value = $event->getControllerResult();

        $response = new Response();

        if ($value === true) {
            $serializer->serialize($value, 'json');
            return;
        }

        $event->setResponse($response);
    }
}