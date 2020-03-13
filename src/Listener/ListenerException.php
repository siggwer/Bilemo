<?php

namespace App\Listener;

use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelEvents;
use App\Normalizer\NormalizerInterface;
use JMS\Serializer\SerializerInterface;
use Exception;

/**
 * Class ListenerException
 *
 * @package App\Listener
 */
class ListenerException implements EventSubscriberInterface
{
    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * @var NormalizerInterface
     */
    private $normalizers;

    /**
     * ListenerException constructor.
     *
     * @param SerializerInterface $serializer
     */
    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @param GetResponseForExceptionEvent $event
     * @param Exception $exception
     */
    public function processException(GetResponseForExceptionEvent $event, Exception $exception)
    {
        $result = null;

        foreach ($this->normalizers as $normalizer) {
            if ($normalizer->supports($exception)) {
                $result = $normalizer->normalize($event->getException());

                break;
            }
        }

        if (null == $result) {
            $result['code'] = Response::HTTP_BAD_REQUEST;

            $result['body'] = [
                'code' => Response::HTTP_BAD_REQUEST,
                'message' => $event->getException()->getMessage()
            ];
        }

        $body = $this->serializer->serialize($result['body'], 'json');

        $event->setResponse(new Response($body, $result['code']));
    }

    /**
     * @param NormalizerInterface $normalizer
     */
    public function addNormalizer(NormalizerInterface $normalizer)
    {
        $this->normalizers[] = $normalizer;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::EXCEPTION => [['processException', 255]]
        ];
    }
}