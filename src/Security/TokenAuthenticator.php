<?php

namespace App\Security;

use Lexik\Bundle\JWTAuthenticationBundle\Response\JWTAuthenticationFailureResponse;
use Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\TokenExtractorInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Security\Guard\JWTTokenAuthenticator;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Exception\ExpiredTokenException;
use Lexik\Bundle\JWTAuthenticationBundle\Exception\MissingTokenException;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTNotFoundEvent;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Api\Security\TokenEvent;
use App\Api\Event\Event;

/**
 * Class TokenAuthenticator
 *
 * @package App\Security
 */
class TokenAuthenticator extends JWTTokenAuthenticator
{
    /**
     * @var EventDispatcherInterface
     */
    private $dispatcher;

    /**
     * TokenAuthenticator constructor.
     *
     * @param JWTTokenManagerInterface $jwtManager
     * @param EventDispatcherInterface $dispatcher
     * @param TokenExtractorInterface  $tokenExtractor
     */
    public function __construct(
        JWTTokenManagerInterface $jwtManager,
        EventDispatcherInterface $dispatcher,
        TokenExtractorInterface $tokenExtractor
    ) {
        parent::__construct($jwtManager, $dispatcher, $tokenExtractor);
        $this->dispatcher = $dispatcher;
    }

    /**
     * @param Request                 $request
     * @param AuthenticationException $authException
     *
     * @return Response|null
     */
    public function onAuthenticationFailure(
        Request $request,
        AuthenticationException $authException
    ) {
        $response = new JWTAuthenticationFailureResponse($authException->getMessageKey());

        if ($authException instanceof ExpiredTokenException) {
            $event = new TokenEvent($authException, $response);
            $this->dispatcher->dispatch(Event::TOKEN_EXPIRED, $event);
        } else {
            $event = new TokenEvent($authException, $response);
            $this->dispatcher->dispatch(Event::TOKEN_INVALID, $event);
        }

        return $event->getResponse();
    }

    /**
     * {@inheritdoc}
     */
    public function start(
        Request $request,
        AuthenticationException $authException = null
    ) {
        $exception = new MissingTokenException(
            'JWT Token not found',
            0,
            $authException
        );

        $event = new JWTNotFoundEvent(
            $exception,
            new JWTAuthenticationFailureResponse(
                $exception->getMessageKey()
            )
        );

        $this->dispatcher->dispatch(Event::NO_TOKEN, $event);

        return $event->getResponse();
    }
}
