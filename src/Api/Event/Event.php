<?php

namespace App\Api\Event;

/**
 * Class TokenEvent
 *
 * @package App\Api\TokenEvent
 */
class Event
{
    const TOKEN_EXPIRED = 'personal_authentication.token_expired';
    const TOKEN_INVALID = 'personal_authentication.token_invalid';
    const NO_TOKEN = 'personal_authentication.no_token';
}