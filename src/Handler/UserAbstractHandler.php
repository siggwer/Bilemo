<?php

namespace App\Handler;

use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class UserAbstractHandler
 *
 * @package App\Handler
 */
abstract class UserAbstractHandler
{
    /**
     * @param null $data
     */
    abstract public function process($data = null): void;

    /**
     * @param Request    $request
     * @param mixed|null $data
     *
     * @return bool|JsonResponse
     */
    public function handle(Request $request, ValidatorInterface $validator, $data = null)
    {
        $constraintViolation = $validator->validate($data);

        if($constraintViolation->count() > 0) {
            return new JsonResponse($constraintViolation, Response::HTTP_BAD_REQUEST);
        }

        return false;
    }
}