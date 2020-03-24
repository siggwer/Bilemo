<?php

namespace App\Exception;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Validator\ConstraintViolationListInterface;

/**
 * Class BadRequestException
 *
 * @package App\Exception
 */
class BadRequestException extends HttpException
{
    /**
     * @var ConstraintViolationListInterface
     */
    private $constraintsViolation;

    /**
     * BadRequestException constructor.
     *
     * @param ConstraintViolationListInterface $constraintsViolation
     */
    public function __construct(ConstraintViolationListInterface $constraintsViolation)
    {
        $this->constraintsViolation = $constraintsViolation;
        parent::__construct(Response::HTTP_BAD_REQUEST);
    }

    /**
     * @return ConstraintViolationListInterface
     */
    public function getConstraintsViolation(): ConstraintViolationListInterface
    {
        return $this->constraintsViolation;
    }
}