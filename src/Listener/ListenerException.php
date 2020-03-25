<?php

namespace App\Listener;

use App\Exception\BadRequestException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpFoundation\Response;
use JMS\Serializer\SerializerInterface;

/**
 * Class ListenerException
 *
 * @package App\Listener
 */
class ListenerException
{
    /**
     * @var ValidatorInterface
     */
    private $validator;

    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * ListenerException constructor.
     *
     * @param ValidatorInterface $validator
     * @param SerializerInterface $serializer
     */
    public function __construct(ValidatorInterface $validator, SerializerInterface $serializer)
    {
        $this->validator = $validator;
        $this->serializer = $serializer;
    }

    /**
     * @param ExceptionEvent $event
     */
    public function onKernelException(ExceptionEvent $event)
    {
        $exception = $event->getThrowable();

//        if($exception instanceof BadRequestException){
//            $response = new JsonResponse($exception->getConstraintsViolation(),
//                Response::HTTP_BAD_REQUEST);
//            //$response->headers->set('Content-Type', 'application/json');
//            $response->headers->replace($exception->getHeaders());
//
//            $event->setResponse($response);
//        }
        $response = new Response(
            $this->serializer->serialize($exception->getConstraintsViolation(), 'json'),
            Response::HTTP_BAD_REQUEST
        );
        $response->headers->set('Content-Type', 'application/problem+json');
        $response->headers->replace($exception->getHeaders());

        $event->setResponse($response);
    }
}