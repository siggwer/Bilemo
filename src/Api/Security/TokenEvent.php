<?php

namespace App\Api\Security;

use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationFailureEvent;

/**
 * Class TokenEvent
 *
 * @package App\Api\Security
 */
class TokenEvent extends AuthenticationFailureEvent
{

}